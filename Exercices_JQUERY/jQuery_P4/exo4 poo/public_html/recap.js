class phrase {
   constructor(nom, prenom, bday, bdayplace, emploi, societe) {
       this.nom = nom;
       this.prenom = prenom;
       this.bday = bday;
       this.bdayplace = bdayplace;
       this.emploi = emploi;
       this.societe = societe;
   }
   checkLetters(text) {
       var pattern = new RegExp(/^[A-Z - /]+$/i);
       return pattern.test(text);
   }
   checkBDate(date) {
       var pattern = new RegExp(/^(([0-2][0-9])|(3[0-1]))\/(([0][1-9])|([1][0-2]))\/\d{4}$/);
       return pattern.test(date);
   }
   concat() {
       return this.nom + ' ' + this.prenom + ' ' + this.bday + ' ' + this.bdayplace + ' ' + this.emploi + ' ' + this.societe;
   }
}

