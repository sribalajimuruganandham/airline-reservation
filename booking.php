<!doctype html>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<title> AIR24 </title>
</head>
<body>
<div style="display:flex;padding-bottom:50px;"><a class="a" id=a1 style="text-align:center;padding-top:10px;"><p id="p1">Ordinary Coach</p></a> <a class="a" id=a2 padding-top:10px; style="text-align:center;padding-top:10px;"><p id="p2">Sleeping Coach</p></a></div>
<style>
#maindiv{
    display:flex;
    gap:50px;
    width: 500px;
    height: 1000px;
}
#p1
{
    color: white;
}
#p2
{
    color: white;
}
.p-2{
width: 50px;
height: 50px;
background-color:grey;
}
#a1{
border-right:0.5px solid white;
}
#a2{
    
    border-left:0.5px solid white;
}
.a{
    width:50%;
    height: 75px;
    background-color: black;
    
    color:red;
    font-weight: 500;

}
.a:hover{
    border-bottom:5px solid aqua ;

}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
.a:active{
    border-bottom:5px solid aqua ;
}
</style>
<div style="display:flex;justify-content:center;align-items:center; ">
<div>
<div style="display:flex;gap:50px;">

<div style="gap:50px" class="d-flex flex-row">
    <div class="p-2" id="s1" onclick="color1()"></div>
    <div class="p-2" id="s2" onclick="color2()"></div>
    <div class="p-2" id="s3" onclick="color3()"></div>
    <div class="p-2" id="s4" onclick="color4()"></div>
    <div class="p-2" id="s5" onclick="color5()"></div>
    
</div>
<br>
<br>
<div style="gap:50px" class="d-flex flex-row">
    <div class="p-2" id="s6" onclick="color6()"></div>
    <div class="p-2" id="s7" onclick="color7()"></div>
    <div class="p-2" id="s8" onclick="color8()"></div>
    <div class="p-2" id="s9" onclick="color9()"></div>
    <div class="p-2" id="s10" onclick="color10()"></div>
</div>
</div>
<br>
<br>
<div style="display:flex;gap:50px">
<div style="gap:50px" class="d-flex flex-row">

 <div class="p-2" id="s11" onclick="color11()"></div>
    <div class="p-2" id="s12" onclick="color12()"></div>
    <div class="p-2" id="s13" onclick="color13()"></div>
    <div class="p-2" id="s14" onclick="color14()"></div>
    <div class="p-2" id="s15" onclick="color15()"></div>
    
</div>
<br>
<br>
<div style="gap:50px" class="d-flex flex-row">
    
    <div class="p-2" id="s16" onclick="color16()"></div>
       <div class="p-2" id="s17" onclick="color17()"></div>
       <div class="p-2" id="s18" onclick="color18()"></div>
       <div class="p-2" id="s19" onclick="color19()"></div>
       <div class="p-2" id="s20" onclick="color20()"></div>


</div>
</div>
<br>
<br>
<div style="display:flex;gap:50px">

<div style="gap:50px" class="d-flex flex-row">
<div class="p-2" id="s21" onclick="color21()"></div>
       <div class="p-2" id="s22" onclick="color22()"></div>
       <div class="p-2" id="s23" onclick="color23()"></div>
       <div class="p-2" id="s24" onclick="color24()"></div>
       <div class="p-2" id="s25" onclick="color25()"></div>

    
</div>
<br>
<br>
<div style="gap:50px" class="d-flex flex-row">
<div class="p-2" id="s26" onclick="color26()"></div>
       <div class="p-2" id="s27" onclick="color27()"></div>
       <div class="p-2" id="s28" onclick="color28()"></div>
       <div class="p-2" id="s29" onclick="color29()"></div>
       <div class="p-2" id="s30" onclick="color30()"></div>

</div>
</div>

<br>
<br>
<div style="display:flex;gap:50px">

<div style="gap:50px" class="d-flex flex-row">
    <div class="p-2"></div>
    <div class="p-2"></div>
    <div class="p-2"></div>
    <div class="p-2"></div>
    <div class="p-2"></div>
    
</div>
<br>
<br>
<div style="gap:50px" class="d-flex flex-row">
<div class="p-2"></div>
<div class="p-2"></div>
<div class="p-2"></div>
<div class="p-2"></div>
<div class="p-2"></div>
</div>
</div>
</div>
</div>
</div>

<script>
    i=0;
    i1=0;
    i2=0;
    i3=0;
    i4=0;
    i5=0;
    i6=0;
    i7=0;
    i8=0;
    i9=0;
    i10=0;
    i11=0;
    p=0;
    function color1()
    {
        if(i%2==0)
        {
        document.getElementById("s1").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i=i+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s1").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i=i+1;    
        
        }
    }
    function color2()
    {
        if(i1%2==0)
        {
        document.getElementById("s2").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i1=i1+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s2").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i1=i1+1;    
        
        }
    }
    function color3()
    {
        if(i2%2==0)
        {
        document.getElementById("s3").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i2=i2+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s3").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i2=i2+1;    
        
        }
    }
    function color5()
    {
        if(i4%2==0)
        {
        document.getElementById("s5").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i4=i4+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s5").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i4=i4+1;    
        
        }
    }
    function color4()
    {
        if(i3%2==0)
        {
        document.getElementById("s4").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i3=i3+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s4").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i3=i3+1;    
        
        }
    }
    function color6()
    {
        if(i5%2==0)
        {
        document.getElementById("s6").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i5=i5+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s6").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i5=i5+1;    
        
        }
    }
    function color7()
    {
        if(i6%2==0)
        {
        document.getElementById("s7").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i6=i6+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s7").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i6=i6+1;    
        
        }
    }
    function color8()
    {
        if(i7%2==0)
        {
        document.getElementById("s8").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i7=i7+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s8").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i7=i7+1;    
        
        }
    }
    function color9()
    {
        if(i8%2==0)
        {
        document.getElementById("s9").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i8=i8+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s9").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i8=i8+1;    
        
        }
    }
    function color10()
    {
        if(i9%2==0)
        {
        document.getElementById("s10").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i9=i9+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s10").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i9=i9+1;    
        
        }
    }
    function color11()
    {
        if(i10%2==0)
        {
        document.getElementById("s11").style.backgroundColor="red";
        p=p+2000;
        document.getElementById("p").innerHTML=p+" Only";
        i10=i10+1;    
    }
    else{
        if(p>=2000)
        {
        p=p-2000;
        }
        document.getElementById("s11").style.backgroundColor="grey";
        document.getElementById("p").innerHTML=p+" Only";
    i10=i10+1;    
        
        }
    }
</script>

<br>
<br>
<div style="padding-left:100px">
<div style="display:flex; gap:40px;padding-top :5px;width:400px;height:60px;border:2px solid black;">
<div style="padding-left: 20px;">
    <p id="p" style="font-weight:500; margin-bottom: 0;">Book Now</p>
    <p style="color:grey;font-size:small">Included All Tax + GST</p>
</div>
<a class="btn btn-primary" href="http://www.paytm.com" target="_blank"; style="background-color:#1976D2;width:180px;height:45px;font-size:small"><p>PAYMENT</p></a>

</div>

</div>



</body>
</html>