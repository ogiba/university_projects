/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(window).load(function () {
    loadDataToView();
    setInterval(loadDataToView, 10000);
});

function loadDataToView(){
    getRequest("/fileController.php?cmd=getData", function (resp) {
            var data = JSON.parse(resp.responseText);
            
            $("#slave_i1").text(data[0].I1);
            $("#slave_i2").text(data[0].I2);
            $("#slave_ai1").text(data[0].AI1);
            $("#slave_ai2").text(data[0].AI2);
            
            $("#slave2_i1").text(data[1].I1);
            $("#slave2_i2").text(data[1].I2);
            $("#slave2_ai1").text(data[1].AI1);
            $("#slave2_ai2").text(data[1].AI2);
                

        });
}

function getRequest(url, onDone, onError) {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (req.readyState === 4 && req.status === 200) {
            if (onDone) {
                onDone(req);
            }
        }
    };

    req.onerror = function () {
        if (onError) {
            onError(req);
        }
    };
    req.open("GET", url, true);
    req.msCaching = "disabled";
    req.send();
}


