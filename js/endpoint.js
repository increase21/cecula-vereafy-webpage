document.addEventListener("DOMContentLoaded", function () {
    // local method
    function $ (element) {
        var property = document.querySelector(element);
        property.text = (text) => {
            $(element).textContent = text;
        };
        return property;
    }
    var MsgBizDiv = $(".business-message");
    var MsgFrndDiv = $(".friend-message");
    // when the button to recommend for a friend is clicked
    $("#friend_btn").onclick = () => {
        var referrerName = $("#referrer_name").value;
        var friendName = $("#friend_name").value;
        var friendMobile = $("#friend_mobile").value;
        // validate the input fields
        if (referrerName === "" || friendName === "" || friendMobile === "") {
            MsgFrndDiv.text("Some fields are missing");
            return;
        }
        MsgFrndDiv.text("");
        // data to be sent out
        let sendData = { "referrer_name": referrerName, "friend_name": friendName, "friend_mobile": friendMobile };
        // send the data to the endpoint
        let endpointURL = "https://irlab.cecula.com:3301/localvereafy/referfriend";
        fetch(endpointURL, {
            method: "POST",
            body: JSON.stringify(sendData)
        }).then(res => {
            return res.json().then(result => {
                if (result.error) {
                    MsgFrndDiv.text(result.error);
                } else {
                    MsgFrndDiv.text(result.success);
                }
            });
        }).catch((error) => {
            console.log(error);
            MsgFrndDiv.text("Could not submit to the server");
        });
    };
    // when the button to recommend for a business is clicked
    $("#business_btn").onclick = () => {
        var businessName = $("#business_name").value;
        var referrerName = $("#your_name").value;
        var businessWebsite = $("#business_website").value;
        // validate the input fields
        if (referrerName === "" || businessName === "" || businessWebsite === "") {
            MsgBizDiv.text("Some fields are missing");
            return;
        }
        MsgBizDiv.text("");
        // data to be sent out
        let sendData = { "referrer_name": referrerName, "business_name": businessName, "business_website": businessWebsite };
        // send the data to the endpoint
        let endpointURL = "https://irlab.cecula.com:3301/localvereafy/referbusiness";
        fetch(endpointURL, {
            method: "POST",
            body: JSON.stringify(sendData)
        }).then(res => {
            return res.json().then(result => {
                if (result.error) {
                    MsgBizDiv.text(result.error);
                } else {
                    MsgBizDiv.text(result.success);
                }
            });
        }).catch((error) => {
            console.log(error);
            MsgBizDiv.text("Could not submit to the server");
        });
    };
});
