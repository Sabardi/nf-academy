    let s1 = {"nama": "andi", nila:90};
    let s2 = {"nama": "amin", nila:70};
    let s3 = {"nama": "ana", nila:80};
    let s4 = {"nama": "isa", nila:50};
    let s5 = {"nama": "marikan", nila:85};
    let siswa = [s1,s2,s3,s4,s5];


    var no =1;
    for(s of siswa){
        let ket = (s.nila >= 60) ? "lulus" : "gagal"; //jk nilai lebih dari / sama dengan 60 lulus
    
        let grade = ""; //belom di inisiasi
    
        let predikat = ""; //belom di inisiasi
    
        //if multi kondisi
        if(s.nila > 85 && s.nila <= 100) grade = "A"; //jk lebih dari 85 dan nilai kurang dari 100 mk grade A
        
        else if (s.nila >= 75 && s.nila <= 85)grade = "B"; //jk lebih dari 75 dan nilai kurang dari 85 mk grade A
        
        else if (s.nila >= 60 && s.nila <= 75)grade = "C"; //jk lebih dari 60 dan nilai kurang dari 75 mk grade A
        
        else if (s.nila >= 30 && s.nila <= 60)grade = "D"; //jk lebih dari 30 dan nilai kurang dari 60 mk grade A
        
        else if (s.nila >= 0 && s.nila <= 30)grade = "E"; //jk lebih dari 30 dan nilai kurang dari 30 mk grade A
        
        else grade= ""; //jika tidak ada yg di pilih


        
        switch(grade){
        
            case "A" : predikat = "sempurna"; //grade nya di inisiasi dari variable sebelum nya jk terpenuhi
                break
        
            case "B" : predikat = "Baik"; 
                break
        
            case "C" : predikat = "Cukup"; 
                break
            case "D" : predikat = "Kurang"; 
                break
            case "E" : predikat = "Buruk"; 
                break
            default : predikat = ""; 
                break
        }
        console.log("no -> "+ no++)
        console.log("nama -> "+ s.nama)
        console.log("nilai -> "+ s.nila)
        console.log("keterangan -> "+ ket)
        console.log("grade -> "+ grade)
        console.log("predikat -> "+ predikat)

    }