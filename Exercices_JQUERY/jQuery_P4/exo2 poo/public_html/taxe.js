class Taxe {
    constructor(salaireBrut, genre, nbEnfants, charges, assurance, cotisation, fraisTotaux, salaireNet) {
        this.salaireBrut = salaireBrut;
        this.genre = genre;
        this.nbEnfants = nbEnfants;
        this.charges = charges;
        this.assurance = assurance;
        this.cotisation = cotisation;
        this.fraisTotaux = fraisTotaux;
        this.salaireNet = salaireNet;
    }
    calculFraisTotaux() {
        this.charges = this.salaireBrut * 18 / 100;
        this.assurance = this.salaireBrut * 7 / 100;
        this.cotisation = this.salaireBrut * 5 / 100;
        this.fraisTotaux = this.charges + this.assurance + this.cotisation ;
        if (this.genre == 'F'){
            var reduc1 = this.fraisTotaux * 2 / 100;
        }
        else {
            var reduc1 = 0;
        }
        if (this.nbEnfants == 3){
            var reduc2 = this.fraisTotaux * 1 / 100;
        }
        else if (this.nbEnfants >= 4){
            var reduc2 = this.fraisTotaux * 2 / 100;
        }
        else {
            var reduc2 = 0;
        }
        this.fraisTotaux = this.fraisTotaux - reduc1 - reduc2;
    }
    calculSalaireNet() {
        this.salaireNet = this.salaireBrut - this.fraisTotaux;
    }
}


