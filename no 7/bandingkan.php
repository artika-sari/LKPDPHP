<?php  
    bandingkan("Artika sari noor cahayani", "Artasya Legina");
    function bandingkan($nama1, $nama2) {
        $jumlah1 = strlen ($nama1);
        $jumlah2 = strlen ($nama2);

        if ($jumlah1 > $jumlah2) {
            $selisih = $jumlah1 - $jumlah2;
            echo $nama1 . " memiliki jumlah karakter lebih banyak dari " . $nama2 . " : selisih " . $selisih . " karakter";
        } else if ($jumlah2 > $jumlah1) {
            $selisih = $jumlah2 - $jumlah1;
            echo $nama2 . " memiliki jumlah karakter lebih banyak dari " . $nama1 . " : selisih " . $selisih . " karakter";
        } else {
            echo $nama1 . " dan " . $nama2 . " tidak memiliki selisih";
        }

   
}
?>