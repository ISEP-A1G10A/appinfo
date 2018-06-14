const $data = $("#data");
let last_data = null;

function refreshData() {
    $.getJSON("test-api", (data) => {
        // console.log(data);
        last_data = data;
        $data.append("<hr/>");
        $.each(data, (item) => {
                $data.append("<div>\n   <span>" + data[item].value + "</span>\n    <span>" + data[item].date_time + "</span>\n</div>\n")
            }
        );
    })
}

function drawChart() {
    let tab = [["Time", "Value"]];
    last_data.forEach((item) => {
        let formattedDate = new Date(item.date_time);
        let day = formattedDate.getDate();
        let month =  formattedDate.getMonth();
        month += 1;
        let hour = formattedDate.getHours();
        let min = formattedDate.getMinutes();
        let date = day +"/"+ month+" - "+ hour+":"+min;
        tab.push([date, parseInt(item.value)]);
    });
    // console.log(tab);
    let data = google.visualization.arrayToDataTable(tab);

    let options = {
        title: 'Sensor data',
        hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
        vAxis: {minValue: -20},
        legend: {
            position: 'none'
        },
        fontSize : 15,
        backgroundColor: '#f5f5f5'
    };

    let chart = new google.visualization.AreaChart(document.getElementById('chart'));
    chart.draw(data, options);
}

function refresh() {
    refreshData();
    drawChart();
}

refreshData();

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


window.setInterval(refresh, 2000);

