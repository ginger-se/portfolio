
@vite(['resources/js/stocks.js'])
<x-head/>
<x-navbar/>

<body class="bg-slate-500">
<div class = "p-3 bg-slate-800 text-slate-100">
    <h1 class="text-3xl text-center font-bold underline ">
        Enter a stock to investigate!
    </h1>
</div>
<div class = "bg-slate-500 p-5 flex flex-wrap justify-center">
    
    <div class="bg-slate-800 text-slate-100 basis-1/2 border-2">
        <form  class="p-2 text-center " id="form">
            <label for="symbol">Symbol:</label>
            <input type="text" id="symbol" name = "symbol" class="border-slate-800 
            border-2 bg-slate-100 rounded-md m-2 text-black">
            <input type="submit"  value="Submit" class="border-2 border-slate-800 
            bg-slate-100 rounded-md p-1 text-black hover:bg-slate-500">
        </form>
    </div>
    <div class="bg-slate-800 text-slate-100 basis-1/2 border-2">
        
        <form  class="p-2 text-center " id="form1">
            <label for="name">Name:</label>
            <input type="text" id="name" name = "name" class="border-slate-800 
            border-2 bg-slate-100 rounded-md m-2 text-black">
            <input type="submit"  value="Submit" class="border-2 border-slate-800 
            bg-slate-100 rounded-md p-1 text-black hover:bg-slate-500">
        </form>
        
    </div>      
    
    <div class="bg-slate-800 text-slate-100 my-4 p-4 basis-1/2 border-2" id="output">
        <h1 class="text-center underline" id="t">
            Current Data
        </h1>
    </div>
    <div class="bg-slate-800 text-slate-100 my-4 p-4 basis-1/2 border-2" id="output1">
        <h1 class="text-center underline" id="t">
            Possible Symbols
        </h1>

    </div>

</div>

</body>
</html>