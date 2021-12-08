//ambil elemen 

var keyword = document.getElementById('keyword');
var select_products = document.getElementById('products_card');
var cat = document.getElementById('cat');

//tambahkan event ketika keyword ditulis

keyword.addEventListener('keyup', function()
{
    //buat object ajax
    var ajax = new XMLHttpRequest();
    
    //cek kesiapan ajax
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4 && ajax.status==200)
        {
            select_products.innerHTML=ajax.responseText;
        }
    }
    //eksekusi ajax
    ajax.open(`GET`,`../assets/ajax/search_products.php?keyword=${keyword.value}&cat=${cat.value}`,true);
    ajax.send();
});

