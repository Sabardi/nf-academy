    let pembeli = "budi"
    let produk = "Ac"
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

    let hrgsat = 0
    let jmlh_beli = 15
    let bruto = hrgsat * jmlh_beli;
    // ternari
    let diskon = (produk == "Ac") ? 0.1 * bruto:0
    console.log(pembeli)
    // console.log("data beli pelanggan"+ pelanggan + 
    // "produk pilihan"+ produk +
    // "harga satuan"+ hrgsat + 
    // "harga kotor"+ bruto + 
    // "harga kotor"+ diskon)