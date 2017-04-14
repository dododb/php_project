/**
 * Created by Alexandre on 13/04/2017.
 */
function like()
{
    var img = document.getElementById("heartImg");
    var color = document.getElementById("heart");


    if(img.getAttribute('src') == "img/site/h2.png")
    {
        img.setAttribute("src", "img/site/h1.png");
        color.style.backgroundColor = "#c2242a";
    }
    else
    {
        img.setAttribute("src", "img/site/h2.png");
        color.style.backgroundColor = "#FFFFFF";
    }
}