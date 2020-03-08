/* NOTE(Jovan):
 * Ukoliko se stranica scroll-uje dovoljno
 * nisko, dodaj "sticky" klasu na header kako bi pratila
 * scroll-ovanje
 */

window.onscroll = function() {navbarScroll()};
var header = document.getElementById("header");
var sticky = header.offsetTop;
function navbarScroll()
{
    if(window.pageYOffset > sticky)
    {
        header.classList.add("sticky");
    }
    else
    {
        header.classList.remove("sticky");
    }
}
