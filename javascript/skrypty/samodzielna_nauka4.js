function funkcja1()
{
    do
        {
            var name = prompt("Var Podaj swoje imie", "");
        }
        while
            (!name || name.trim().length === 0 || !isNaN(Number(name)));
        document.querySelector("#name").innerHTML = name;
}


function funkcja2()
{
    let rodzajDzialania1 = prompt("Podaj rodzaj działania", "");
    let liczba1 = prompt("Podaj pierwszą liczbę: ", "");
    let liczba2 = prompt("Podaj drugą liczbę", "");

    while(!rodzajDzialania1 || !liczba1 || !liczba2 || rodzajDzialania1.trim().length === 0 || !isNaN(Number(rodzajDzialania1)) || 
    liczba1.trim().length === 0 || isNaN(Number(liczba1)) || 
    liczba2.trim().length === 0 || isNaN(Number(liczba2)) )
    {
        alert("Pole nie może być puste oraz być literami!");
        rodzajDzialania1 = prompt("Podaj rodzaj działania", "");
        liczba1 = prompt("Podaj pierwszą liczbę: ", "");
        liczba2 = prompt("Podaj drugą liczbę", "");
    }

    liczba1 = Number(liczba1)
    liczba2 = Number(liczba2)

    switch(rodzajDzialania1.trim().toLocaleLowerCase())
        {
        case "+":
        case "dodawanie":
            alert(liczba1 + liczba2);
            break;
        case "-":
        case "odejmowanie":
            alert(liczba1 - liczba2);
            break;
        case "*":
        case "mnożenie":
            alert(liczba1 * liczba2);
            break;
        case "/":
        case "dzielenie":
            alert(liczba1 / liczba2);
            break;
        default: 
            alert("Zły typ działania");
        }

        console.log('7uh8h8yhy');

}