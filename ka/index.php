<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Coffee App Concept</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<main>
    <div class="device">
        <header>
            <h1><strong>CSS</strong>Presso</h1>
        </header>
        <section>
            <form>            
                <input type="radio" name="coffeeType" id="espresso">
                <input type="radio" name="coffeeType" id="doppio">
                <input type="radio" name="coffeeType" id="macchiatto">
                <input type="radio" name="coffeeType" id="cortado">
                <input type="radio" name="coffeeType" id="cappuccino">
                <input type="radio" name="coffeeType" id="americano">
                <input type="radio" name="coffeeType" id="mocha">
                <input type="radio" name="coffeeType" id="latte">
                <input type="radio" name="coffeeType" id="breve">
                <input type="radio" name="coffeeType" id="mochabreve">
                <input type="radio" name="coffeeType" id="flatwhite">
                <input type="radio" name="coffeeType" id="bombon">
                <div class="coffee-title">                
                    <nav class="coffee-labels">
                        <label for="doppio">
                            <span>Doppio</span>
                            <p>Doppio in espresso is a double shot, extracted using a double coffee filter in the portafilter.</p>
                        </label>
                        <label for="macchiatto">
                            <span>Macchiatto</span>
                            <p>A caffè macchiato, sometimes called espresso macchiato, is an espresso coffee drink with a small amount of milk added, today usually foamed milk.</p>
                        </label>
                        <label for="cortado">
                            <span>Cortado</span>
                            <p>A cortado (from the Spanish verb "cortar" - to cut) is an espresso cut with a small amount of warm milk.</p>
                        </label>
                        <label for="cappuccino">
                            <span>Cappuccino</span>
                            <p>A cappuccino (from the Capuchin friars) is an Italian coffee drink which is traditionally prepared with espresso, hot milk and steamed-milk foam.</p>
                        </label>
                        <label for="americano">
                            <span>Americano</span>
                            <p>A caffè americano is a style of coffee prepared by adding hot water to espresso, giving it a similar strength to, but different flavor from, regular drip coffee.</p>
                        </label>
                        <label for="mocha">
                            <span>Mocha</span>
                            <p>A caffè mocha is based on espresso and hot milk, but with added chocolate, typically in the form of sweet cocoa powder, although many varieties use chocolate syrup.</p>
                        </label>
                        <label for="latte">
                            <span>Latte</span>
                            <p>A caffè latte is a coffee drink made with espresso and steamed milk. The term is Italian for "milk coffee."</p>
                        </label>
                        <label for="breve">
                            <span>Breve</span>
                            <p>A caffè breve is an American variation of a latte: a milk-based espresso drink using steamed half-and-half mixture of milk and cream instead of milk.</p>
                        </label>
                        <label for="mochabreve">
                            <span>Mocha Breve</span>
                            <p>A mocha breve is similar to a caffè breve with an added ounce of cocoa powder or chocolate syrup.</p>
                        </label>
                        <label for="flatwhite">
                            <span>Flat White</span>
                            <p>A flat white is prepared by pouring microfoam (steamed milk with small, fine bubbles and a glossy or velvety consistency) over a single or double shot of espresso.</p>
                        </label>
                        <label for="bombon">
                            <span>Café Bombón</span>
                            <p>A café bombón is a popular Spanish coffee drink made with espresso served with sweetened condensed milk in a 1:1 ratio.</p>
                        </label>
                    </nav>
                </div>
                <a href="#" class="coffee-info" tabindex="1">
                    <div class="coffee-recipe">
                        <div class="recipe-foam">milk foam</div>
                        <div class="recipe-steam">steamed milk</div>
                        <div class="recipe-water">hot water</div>
                        <div class="recipe-half">half &amp; half</div>
                        <div class="recipe-chocolate">chocolate</div>
                        <div class="recipe-crema"></div>
                        <div class="recipe-espresso">espresso</div>
                        <div class="recipe-condensed">condensed milk</div>
                    </div>
                    <div class="coffee-cup">
                        <div class="coffee-steam">
                            <div class="steam"></div>
                            <div class="steam large"></div>
                            <div class="steam"></div>
                        </div>
                        <div class="coffee-ingredients">                      
                            <div class="ingredient-foam"></div>
                            <div class="ingredient-steam"></div>
                            <div class="ingredient-water"></div>
                            <div class="ingredient-half"></div>
                            <div class="ingredient-chocolate"></div>
                            <div class="ingredient-crema"></div>
                            <div class="ingredient-espresso"></div>
                            <div class="ingredient-condensed"></div>
                        </div>
                    </div>
                </a>
                <div class="info-overlay"></div>
                <div class="coffee-controls">
                    
                    <button type="reset">
                        Espresso Menu
                    </button>
                </div>
            </form>
        </section>
    </div>
</main>
<!-- partial -->
  <script src='//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script><script  src="./script.js"></script>

</body>
</html>