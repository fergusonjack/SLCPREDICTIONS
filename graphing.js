countx = 0;
county = 10;

datalist = [];

graduateSal = $("#gradSal").val();
userrpi = $("#rpi").val();
margin = $("#margin").val();
payinc = $("#payinc").val();
repaymentThres = $("#repaymentthres").val();
repaymentThresInc = $("#replaymentthresinc").val();
repayrate = $("#repayrate").val();
years = $("#years").val();
fees = $("#fees").val();
industryLoan = $("#yiic").val();
total = $("#total").val();


window.onload = function () {
    chart = new CanvasJS.Chart("chartContainer", {
        title:{
            text: "Plot of loan cost over time"
        },
        backgroundColor: "#eeeeee",
        data: [
            {
                // Change type to "doughnut", "line", "splineArea", etc.
                type: "line",
                dataPoints: datalist
            }
        ]
    });

    chart.render();
};


/*
function clickUser() {
        countx = countx + 0.1;
        datalist.push(
            {x: (countx), y: (Math.cos(countx))}
        );
        chart.render();
        }

var renderButton = document.getElementById("buttons");
renderButton.addEventListener("click", clickUser);

*/