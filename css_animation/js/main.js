$(".ball").velocity({ 
    top: "60px",    
    left: "160px",
},{ 
    duration: 2000
})
.velocity({ 
    top: "120px",    
    left: "260px",
},{ 
    duration: 500
})
.velocity({ 
    top: "50px",    
    left: "160px",
},{ 
    duration: 500
})
.velocity({ 
    top: "10px",    
    left: "240px",
},{ 
    duration: 500
})
;

$(".ronaldo").velocity({ 
    top: "30px",    
    left: "130px",
},{ 
    delay:1500,
    duration: 2000
})

//
//$(".ball").velocity({ 
//    top: "60px",    
//  left: "160px"
//}, 2000)
//
//$(".ronaldo").velocity({ 
//    top: "60px",    
//  left: "160px"
//}, 2000);
//
//$(".ball").velocity({ 
//    top: "120px",    
//  left: "260px"
//}, 1000);
//
//$(".ball").velocity({ 
//    top: "15px",    
//  left: "240px"
//}, 500);

function moveball(){
    $(".ball").velocity({ 
                    top: "60px",    
                    left: "160px",
                },{ 
                    duration: 2000
                })
}