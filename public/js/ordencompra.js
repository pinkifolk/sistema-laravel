var app = new Vue({
    el:'#app',
    data:{
        allItems:[],
        preTotal:0,
        totalIva: 0,
        totalPagar:0,
        codigo:'',
        descripcion:'',
        cantidad:'',
        precioU:'',


    },
    methods:{
        agregarItems: function(){
            if (this.codigo.length <=1) return;
            this.allItems.push({
                codigo: this.codigo, descripcion: this.descripcion, cantidad: this.cantidad, precioU: this.precioU
            });
        this.codigo ='';
        this.descripcion='';
        this.cantidad='';
        this.precioU='';
        },
        eliminarItem: function(index){
            this.allItems.splice(index,1);
        },
    },
    computed:{
        totalParcial(){
            this.preTotal = 0
                for(suma of this.allItems){
                    this.preTotal = this.preTotal + suma.total;
                }
                this.totalIva = this.preTotal * 1.19 
                this.totalPagar = this.preTotal + this.totalIva
                return this.preTotal;
            },
        totalIva(){

            return this.totalIva;
                 
        },
        totalPagar(){
            return this.totalPagar;
        },

    },
        
});
