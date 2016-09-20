var counter = 0;
var displayableCounter = counter.getMinutes + " : " + counter.getSeconds;

function startCounter()
{
    setTimeOut(counter);
}

function stopCounter()
{
    clearTimeOut(counter);
}

function displayCounter()
{
    return displayableCounter;
}
