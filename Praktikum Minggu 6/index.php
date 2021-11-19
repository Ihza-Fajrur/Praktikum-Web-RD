<html>
    <head>
        <title>Toko Buah</title>
    </head>

    <body>
        <form onsubmit="calc()">
            <pre>
            <h3>Daftar Belanja Buah</h3><br>
            Mangga
            <input type="number" id="mangga" name="mangga"><br>
            Jambu
            <input type="number" id="jambu" name="jambu"><br>
            Salak
            <input type="number" id="salak" name="salak"><br><br>
            <input type=submit name="submit">
            
            <div id="hasil"></div>
            </pre>
        </form>

        <script type="text/javascript">

            function calc(){
                event.preventDefault()

                var jmlMangga=document.getElementById('mangga').value;
                var jmlJambu=document.getElementById('jambu').value;
                var jmlSalak=document.getElementById('salak').value;

                var total = jmlMangga * 15000 + jmlJambu * 13000 + jmlSalak * 10000; 

                output = document.getElementById('hasil');
                output.innerHTML = "Total Belanja: "+ total;

            }

            <?php
            class mangga{
                public $harga;
                public function __construct($jml){
                    $this->jml = $jml;
                    $this->harga= 15000;
                }

                public function jmlMangga(){
                    return $this->jml;
                }
                
                public function hrgMangga(){
                    return $this->harga;
                }
            }

            class jambu{
                public $harga;
                public function __construct($jml){
                    $this->jml = $jml;
                    $this->harga= 13000;
                }

                public function jmlJambu(){
                    return $this->jml;
                }
                
                public function hrgJambu(){
                    return $this->harga;
                }
            }

            class salak{
                public $harga;
                public function __construct($jml){
                    $this->jml = $jml;
                    $this->harga= 10000;
                }

                public function jmlSalak(){
                    return $this->jml;
                }
                
                public function hrgSalak(){
                    return $this->harga;
                }
            }
            
            ?>
        </script>
    </body>
</html>