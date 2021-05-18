// Métier
class CalculatriceBLO {
    constructor(x,y,operation,solution){
        this.x = x ;
        this.y = y ;
        this.operation = operation ;
        this.solution = solution ;
    }
    Calculer(){
        this.solution = undefined;
        switch (this.operation) {
            case '+':
                this.solution = this.x + this.y;
                break;
            case '-':
                this.solution = this.x - this.y;
                    break;
            case 'x':
                this.solution = this.x * this.y;
                    break;
            case '/':
                this.solution = this.x / this.y;
                    break;
            case '%':
                this.solution = this.x % this.y;
                    break;
            default:
                break;
        }
        return this.solution;
    }

    Init(){
        this.x = undefined;
        this.y = undefined;
        this.operation = undefined;
    }

  }