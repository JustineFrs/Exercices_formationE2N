class Verif {
    constructor(nom, prenom, adresse_mail, numero, verif) {
        this.nom = nom;
        this.prenom = prenom;
        this.adresse_mail = adresse_mail;
        this.numero = numero;
    }
    /**
     * Verifier que le champ est une adresse mail
     * @param {type} mailTest
     * @returns {Boolean}
     */
    verifMail(mailTest) {
        var pattern = new RegExp(/^[+A-Z0-9._-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i);
        return pattern.test(mailTest);
    }
    /**
     * Verifier que le champs ne contient que des chiffres
     * @param {type} numeroTest
     * @returns {Boolean}
     */
    verifNumero(numeroTest) {
        var pattern = new RegExp(/0[1-9](([-. ])?[0-9]){8}/);
        return pattern.test(numeroTest);
    }
    /**
     * Verifier que le champs ne comporte que des lettres min et MAJ et -
     * @param {type} lettreTest
     * @returns {Boolean}
     */
    verifLettre(lettreTest) {
        var pattern = new RegExp(/^[A-Z -]+$/i);
        return pattern.test(lettreTest);
    }
    /**
     * 
     * @returns {String}
     */
    recap() {
        if(Verif == true){
            return this.nom + ' ' + this.prenom + ' ' + this.adresse_mail + ' ' + this.numero;
        }
        else{
            return 'Verifier vos infos';
        }
    }
}