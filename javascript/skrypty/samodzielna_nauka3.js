function funkcja1()
{
    alert("działa");
}

function funkcja2()
{
    let rodzajDzialania1 = prompt("Podaj rodzaj działania", "");
    let liczba1 = Number(prompt("Podaj pierwszą liczbę: ", ""));
    let liczba2 = Number(prompt("Podaj drugą liczbę", ""));

    if(Boolean(rodzajDzialania1) == true && Boolean(liczba1) == true && Boolean(liczba2) == true)
    {
        if(!isNaN(liczba1) || !isNaN(liczba2))
        {
            if(rodzajDzialania1 == "dodawanie" || rodzajDzialania1 == "+")
            {
                alert(liczba1 + liczba2);
            }
            else if(rodzajDzialania1 == "odejmowanie" || rodzajDzialania1 == "-")
            {
                alert(liczba1 - liczba2);
            }
            else if(rodzajDzialania1 == "mnożenie" || rodzajDzialania1 == "*")
            {
                alert(liczba1 * liczba2);
            }
            else if(rodzajDzialania1 == "dzielenie" || rodzajDzialania1 == "/")
            {
                alert(liczba1/liczba2);
            }
            else
            {
                alert("Źle podany rodzaj działania");
            }
        }
        else
        {
            alert("Zła podana wartość liczb");
        }
    }
    else
    {
        alert("Pola nie mogą być puste");
    }

}
function funkcja3()
{
    let rodzajDzialania2 = prompt("Podaj rodzaj działania", "");
    let liczba3 = Number(prompt("Podaj pierwszą liczbę: ", ""));
    let liczba4 = Number(prompt("Podaj drugą liczbę", ""));
    if(Boolean(rodzajDzialania2) == true && Boolean(liczba3) == true && Boolean(liczba4) == true)
        {
            switch(rodzajDzialania2)
            {
                case "+":
                    alert(liczba3 + liczba4);
                    document.write("Po dodaniu liczby "+ liczba3 + " i liczby " + liczba4)
                    break;
                case "-":
                    alert(liczba3-liczba4);
                    break;
                case "*":
                    alert(liczba3*liczba4);
                    break;
                case "/":
                    alert(liczba3/liczba4);
                    break;
                default:
                    alert("Zła podana wartość liczb");
            }
    }
    else
    {
        alert("Pola nie mogą być puste");
    }
    //27 linijek kodu
}

function funkcja4()
{
    //dni tygodnia
    let dzienTygodnia = prompt("Podaj dzień tygodnia: ", "")
    switch(dzienTygodnia)
    {
        case "poniedziałek":
            alert(dzienTygodnia + " chętnie pokażę przedziałek");
            break;
        case "wtorek":
            alert(dzienTygodnia + " zapnij rozporek");
            break;
        case "środa":
            alert(dzienTygodnia + " dzień loda");
            break;
        case "czwartek":
            alert(dzienTygodnia + " dzień bez majtek");
            break;
        case "piątek":
            alert(dzienTygodnia + " weekendu początek");
            break;
        case "sobota":
            alert(dzienTygodnia + " zaraz zjem kota");
            break;
        case "niedziela":
            alert(dzienTygodnia + " kto się nie rozbiera ten się w piekle poniewiera");
            break;
        default:
            alert("aha");
    }

}

function funkcja5()
{
    let liczba = prompt("Podaj liczbę: ","");
    if(liczba == true)
    {
        if(!isNaN(Number(liczba)))
        {
            if(Number(liczba)%2 == 0)
            {
                alert("Liczba "+liczba+" jest parzysta.");
            }
            else if(Number(liczba)%3 == 0)
            {
                alert("Liczba "+liczba+" jest nieparzysta ale jest podzielna przez 3.");
            }
            else
            {
                alert("Liczba "+liczba+" jest nieparzysta i nie jest podzielna przez 3.");
            }
        }
        else
        {
            alert("Wartość liczby jest nie poprawna.")
        }
    }
    else
    {
        alert("Pole nie może być puste!")
    }
}