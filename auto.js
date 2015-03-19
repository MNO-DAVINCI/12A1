var car = {
	type:"Fiat", 
	model:500, 
	color:"white"};

var car = function (cartype, carmodel, carcolor) {
	this.type = cartype;
	this.model = carmodel;
	this.color = carcolor;
	this.getType = function() {return this.type; };
};

var porsche = new car("Porsche", 911, "Black");

console.log(porsche.getType());

