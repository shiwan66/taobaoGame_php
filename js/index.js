Tida.ready({console:1}, function() {
    Tida.isLogin(true, function() {
        if(data.finish) {
            console.log(data)
        } else {
            console.log('auth fail')
            console.log(data)
        }
    })
})
function getMixNick() {
    Tida.mixNick({}, function(data) {
        return data;
    })
}