function problem1(x, err){
if(!isNaN(x) && x >= 0 && x <= 118 && x)
{
document.getElementsByClassName(err)[0].style.visibility = 'hidden';}
else
{document.getElementsByClassName(err)[0].style.visibility = 'visible';}
}

function problem2(y, mes){
if(y.search(/^\d{3}\-\d{2}\-\d{4}$/))
{           
document.getElementsByClassName(mes)[0].style.visibility = 'hidden';}
else
{document.getElementsByClassName(mes)[0].style.visibility = 'visible';}
}

function problem3(x, mes){
if(x.search(/^\d{16}$/) || x.search(/^\d{4}\s\d{4}\s\d{4}\s\d{4}$/))
{
document.getElementsByClassName(mes)[0].style.visibility = 'hidden';}
else
{document.getElementsByClassName(mes)[0].style.visibility = 'visible';}
}

function problem4(x, mes){
if(x.search(/^[1-12]\/\[1-30]\/\[1753-2100]$/))
{
document.getElementsByClassName(mes)[0].style.visibility = 'hidden';}
else
{document.getElementsByClassName(mes)[0].style.visibility = 'visible';}
}

function problem5(x, mes){
if(x.search(/^[A-Z]{2}$/))
{
document.getElementsByClassName(mes)[0].style.visibility = 'hidden';}
else
{document.getElementsByClassName(mes)[0].style.visibility = 'visible';}
}

function problem6(x, mes){
if(x.search(/^\w*[1-9]\d*(((,\d{3}){1})?(\.\d{0,2})?)\w*$/))
{
document.getElementsByClassName(mes)[0].style.visibility = 'hidden';}
else
{document.getElementsByClassName(mes)[0].style.visibility = 'visible';}
}
