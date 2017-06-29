countx = 0;
county = 10;

datalist = [];

$(document).ready(function () {
    chart = new CanvasJS.Chart("chartContainer", {
        title: {
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

    graduateSal = parseInt($("#gradSal").val());
    userrpi = parseInt($("#rpi").val());
    margin = parseInt($("#margin").val());
    payinc = parseInt($("#payinc").val());
    repaymentThres = parseInt($("#repaymentthres").val());
    repaymentThresInc = parseInt($("#replaymentthresinc").val());
    repayrate = parseInt($("#repayrate").val());
    years = parseInt($("#years").val());
    fees = parseInt($("#fees").val());
    industryLoan = parseInt($("#yiic").val());
    mainLoan = parseInt($("#mainLoan").val());
    mainLoanYears = parseInt($("#yearsMainLoan").val());
    total = parseInt($("#total").val());
    totalCalc()
})

$(document).ready(function () {

    $(".txbx").on("input", function () {
        graduateSal = parseInt($("#gradSal").val());
        userrpi = parseFloat($("#rpi").val());
        margin = parseFloat($("#margin").val());
        payinc = parseFloat($("#payinc").val());
        repaymentThres = parseInt($("#repaymentthres").val());
        repaymentThresInc = parseFloat($("#replaymentthresinc").val());
        repayrate = parseFloat($("#repayrate").val());
        years = parseInt($("#years").val());
        fees = parseInt($("#fees").val());
        industryLoan = parseInt($("#yiic").val());
        mainLoan = parseInt($("#mainLoan").val());
        mainLoanYears = parseInt($("#yearsMainLoan").val());
        total = parseInt($("#total").val());
        endYear = parseInt($("#endYear").val());
        totalCalc();
        graphReDraw()
    })
})


function graphReDraw() {
    chart.render()
    var startYear = endYear;
    var totalMargin = margin + userrpi;

    labelfor:
    for (i = 0; i <= 25; i++) {
        graduateSal = graduateSal * ((payinc + 100) / 100);
        repaymentThres = repaymentThres * ((repaymentThresInc + 100) / 100);
        payment = (graduateSal - repaymentThres) * (repayrate/100);
        total = total * ((totalMargin + 100)/100)
        total = total-payment
        var taxable = graduateSal - repaymentThres;
        if (total >= 0) {
            datalist[i] = ({x: startYear++, y: total})
        } else {
            datalist[i] = ({x: startYear++, y: 0})

        }
    }
    chart.render();
}

function totalCalc() {
    total = ((years * fees) + industryLoan + (mainLoan * mainLoanYears));
    $("#total").val(total);
}



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