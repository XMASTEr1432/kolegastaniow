/*

    1 km jest równy 0,6214 mili

*/


function konwersja()
{
    let cos = prompt("Podaj na co chcesz konwertować (mile albo kilometry)")
        switch(cos)
            {
                case "mile":
                    let mile = Number(prompt("Podaj mile", ""))
                    console.log(mile)
                    konwersjaNaKilometr = () =>
                    {
                        convertKm = mile / 0.6214;
                        wynik = String(mile + " mil jest równe " + (parseFloat(convertKm).toFixed(2)) + " kilometrów")
                        console.log(wynik);
                        document.querySelector("#wynik1").innerHTML = wynik;
                    }
                    konwersjaNaKilometr();
                    break;
                case "kilometry":
                    let kilometry = Number(prompt("Podaj kilometry", ""))
                    console.log(kilometry)
                    konwersjaNaMile = () =>
                    {
                        convertM = kilometry * 0.6214;
                        wynik = String(kilometry + " kilometrów jest równe " +(parseFloat(convertM).toFixed(2)) + "mil")
                        console.log(wynik);
                        document.querySelector("#wynik1").innerHTML = wynik;
                    }
                    konwersjaNaMile();
                    break;
                default:
                    alert("Zła wartość")
            }
}
// konwersja();

// document.querySelector("#wynik1").innerHTML = wynik;