
$(document).ready(function() {Tida.ready({
    module: ["device", "media", "server", "social", "widget", "sensor", "share", "buy", "draw", "im", "calendar", 'award', 'ar'],
    debug: 1,
    // combo: 0,
    interactId: Tida.getParam("interactId") || "c27335b4-c510-4183-a8e6-19ad57a1dc8a"//"c69bb4a4-dc94-4076-9aec-1baeb47b70b4"//"8ecc923e-0d5c-4f65-ae55-49dc22d2d8f1"//"462b2fd6-84fb-4d55-b451-bde8e19fc475"//"b9cc10a9-916d-4481-b840-e6ad3ceaddf0"//"f9d8c5d0-c894-47a7-a7e8-3eb9541f0e07"//"6a46ff4d-9423-4a39-8d5a-db6b6c961439"//"456de863-cda2-495f-acab-495b4aece2cc"//"a8e9c835-09db-45dd-bbc1-8964baa337d6"//"e5616f6f-9a8b-460c-abaa-25b787841948"
    //module:["draw","prize","buy","device","media","social","widget","im","server","share","award"]
}, function () {
    alert(navigator.userAgent);

    var options = {
        bizApi: "taobao.mobile.promotion.benefit.activity.send",
        bizExtString: "bizExtString",
        asac: "D5JIXKZ2UR3DSROM4PYB",
        isSec: "true"
    };
    // Tida.securityRequest(options, function(data) {
    //confirm(JSON.stringify(data))
    //})
    Tida.showCloseBtn();

});
})