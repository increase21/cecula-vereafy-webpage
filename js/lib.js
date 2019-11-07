document.addEventListener("DOMContentLoaded", function () {
    const downloadBtn = document.querySelector("#download-btn");
    const downloadLink = document.querySelector("#download-app");
    const secureYourselfBtn = document.querySelector("#v-secure-yourself");
    const tellSomeoneBtn = document.querySelector("#v-tell-someone");

    const downloadSection = document.querySelector("#app-download");
    const tfaGuideSection = document.querySelector("#tfa-guide");
    const actionSection = document.querySelector("#action");

    document.addEventListener("click", (e) => {
        switch (e.target) {
        case downloadBtn:
            e.preventDefault();
            e.stopImmediatePropagation();
            window.scrollTo({
                top: downloadSection.offsetTop - 50,
                behavior: "smooth"
            });
            break;
        case downloadLink:
            e.preventDefault();
            e.stopImmediatePropagation();
            window.scrollTo({
                top: downloadSection.offsetTop - 50,
                behavior: "smooth"
            });
            break;
        case secureYourselfBtn:
            e.preventDefault();
            e.stopImmediatePropagation();
            window.scrollTo({
                top: tfaGuideSection.offsetTop - 50,
                behavior: "smooth"
            });
            break;
        case tellSomeoneBtn:
            e.preventDefault();
            e.stopImmediatePropagation();
            window.scrollTo({
                top: actionSection.offsetTop - 50,
                behavior: "smooth"
            });
            break;
        }
    });
});
