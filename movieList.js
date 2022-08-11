let dataList = [
    {name:"azekawa"},
    {name:"okada"},
    {name:"fujimi"},
    {name:"tom"}
];

function dispList(){
    let text = '';

    for(let i=0;i<dataList.length;i++){
        
        text = text+'<form action="movie.html" method="get"><button type="submit" name="result" value="'+dataList[i].name+'">';
        text = text+dataList[i].name+'<br>';
        text = text+'</button></form>\n';
    }

    console.log(text);//logèoóÕ

    document.getElementById('contents').innerHTML= text;//htmlèoóÕ
    
}