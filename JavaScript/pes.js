    let pembeli = "budi"
    let produk = "kulkas"
    let hrgsat = 0
    
    // harga produk tv 3jt, kulkas 4jt Ac 5jt

    if (produk == "tv"){
        hrgsat = 3000000
        console.log("pembeli" + pembeli + "nama barang" + produk + "harga" + hrgsat)
    }else if(produk == "kulkas"){
        hrgsat = 4000000
        console.log("pembeli" + pembeli + "nama barang" + produk + "harga" + hrgsat)

    }else if(produk == "Ac"){
        hrgsat = 5000000
        console.log("pembeli" + pembeli + "nama barang" + produk + "harga" + hrgsat)
    }else{
        hrgsat = 0
        console.log("pembeli" + pembeli + "nama barang" + produk + "harga" + hrgsat)
    }

    let jmlh_beli = 15
    let bruto = hrgsat * jmlh_beli;
    // ternari
    let diskon = (produk == "kulkas") ? 0.1 * bruto:0
    // console.log(pembeli)
    console.log("data beli pelanggan : "+ pembeli + 
    " produk pilihan : "+ produk +
    "harga satuan : "+ hrgsat + 
    "harga kotor"+ bruto + 
    "harga kotor"+ diskon)


    console.log("menggunakan switch")
    
    switch(produk){
        case 'TV' : hrgsat = 3000000; break;
        case 'kulkas' : hrgsat = 4000000; break;
        case 'AC' : hrgsat = 5000000; break;
        default: hrgsat = 0;
    }

    let jmlh_beli2 = 15
    let bruto2 = hrgsat * jmlh_beli2;
    // ternari
    let diskon2 = (produk == "kulkas") ? 0.1 * bruto2:0
    console.log("data beli pelanggan : "+ pembeli + 
    " produk pilihan : "+ produk +
    " harga satuan : "+ hrgsat + 
    " harga kotor"+ bruto + 
    " harga kotor"+ diskon)
