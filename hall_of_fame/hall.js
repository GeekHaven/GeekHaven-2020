var response;
var data;
fetchData();
async function fetchData() {
    response = await fetch('HOF.csv');
    $(document).ready(getData);
}

async function getData() {

    data = await response.text();
    const rows = data.split('\n').slice(1);
    const loop = rows.forEach((row, index) => {
        const elt = row.split(',');

        var element = " <a class=\"carousel-item-image\" href=\"alumniinfo.html?key=" + index + "\"><img src ='assets/" + elt[3] + "' height=300px width=200px/></a> <h5 class=\"yy\" style=\"color:white\">" +
            elt[0] + "</h5> <h6>" + elt[2] + " Wing" + " '" + elt[1].substring(2) + "</h6>";
        var elem = document.createElement("div");
        elem.className = "carousel-item";
        elem.innerHTML = element;
        document.getElementById(elt[1]).appendChild(elem);

    });
    await loop;
    $(".carousel").carousel({
        duration: 200,
    });
    autoplay();

    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 2000);
    }


}