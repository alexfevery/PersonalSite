function GenerateRandomQuote() 
{
    var cacheBuster = Date.now();
    fetch(`quotes.txt?cb=${cacheBuster}`)
        .then(response => response.text())
        .then(data => {
            var quotes = data.split("\n").filter(line => line.trim() !== "");
            var randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
            document.getElementById("quote").textContent = "\""+randomQuote.split("-")[0].trim()+"\"";
            document.getElementById("author").textContent = "- " + randomQuote.split("-")[1].trim();
        });
}

function GetLatestQuote() 
{
    var cacheBuster = Date.now();
    fetch(`quotes.txt?cb=${cacheBuster}`)
        .then(response => response.text())
        .then(data => {
            var quotes = data.split("\n").filter(line => line.trim() !== "");
            var LatestQuote = quotes[quotes.length - 1];
            document.getElementById("quote").textContent = "\"" + LatestQuote.split("-")[0].trim()+"\"";
            document.getElementById("author").textContent = "- " + LatestQuote.split("-")[1].trim();
        });
}

window.onload = GetLatestQuote;