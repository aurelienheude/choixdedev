new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [1,2,3,4,5,6,7],
    datasets: 
    [{ 
        data: [5,24,134,45,124,7,34],
        borderColor: "#3e95cd",
        fill: false
    }]
  }
});