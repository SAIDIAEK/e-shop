export function usePrice(){

    function presentPrice(priceInCents) {
        //  Convertir les centimes en dollars
        const priceInDollars = priceInCents / 100;

        // Formater le prix avec deux décimales
        return priceInDollars.toFixed(2);
    }

    return {presentPrice};
}