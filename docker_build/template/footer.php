        <div class="block">
                <center>This code was nicked from Apaxy V2</center>
        </div><!--/.postlisting-->

		
</div><!--/.wrapper-->

<br><div>Now we're below the table, here's php::</div><br>
<?php
echo "<br><div><p>here's some php-generated text (I hope)</p></div>";
?>
<br>
<?php
echo "<br><address> Apache/2.4.38 (Debian) Server at IP localhost Port xy</address>";
?>

<div class="footer">
        
</div><!--/.footer-->
<script type="text/javascript">
// grab the 2nd child and add the parent class. tr:nth-child(2)
document.getElementsByTagName('tr')[1].className = 'parent';
// fix links when not adding a / at the end of the URI
var uri = window.location.pathname.substr(1);
if (uri.substring(uri.length-1) != '/'){
        var indexes = document.getElementsByClassName('indexcolname'),
        i = indexes.length;
        while (i--){
            var a = indexes[i].getElementsByTagName('a')[0];
            a.href = '' + uri + '/' + a.getAttribute('href',2);
        }
}
</script>