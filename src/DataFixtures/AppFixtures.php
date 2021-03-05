<?php

namespace App\DataFixtures;

use App\Entity\Farmer;
use App\Entity\Category;
use App\Entity\Recipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        # Création des régions
       # $localization = new Localization();
       # $localization->setName('Politique')->setAlias('politique');

        $farmer= new Farmer();
        $farmer->setName('Chadwick Boseman')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('wales');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Denzel Washington')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('wales');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('wales');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('wales');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shemar Moore')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('west-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shawn Wayans')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('west-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('west-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('west-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shemar Moore')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('east-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shawn Wayans')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('east-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('east-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('east-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shemar Moore')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('yorks-humber');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shawn Wayans')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('yorks-humber');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('yorks-humber');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('yorks-humber');
        $manager->persist($farmer);

        #Creation Farmer
        $farmer= new Farmer();
        $farmer->setName('Chris Pine')
            ->setAddress('25 Brickroad')
            ->setZipcode('10000')
            ->setCity('Edimburg')
            ->setLocalization('scotland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Ian Somerhalder')
            ->setAddress('25 Plumkroad')
            ->setZipcode('20000')
            ->setCity('Glasgow')
            ->setLocalization('scotland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('William Levy')
            ->setAddress('25 Oxford Street')
            ->setZipcode('30000')
            ->setCity('Aberdeen')
            ->setLocalization('scotland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('JDavid Giuntoli')
            ->setAddress('25 Flash Road')
            ->setZipcode('41000')
            ->setCity('Dundee')
            ->setLocalization('scotland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Matt Bomer')
            ->setAddress('25 Block three')
            ->setZipcode('BT47 2AS')
            ->setCity('Londonderry')
            ->setLocalization('northern-ireland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Idris Elba')
            ->setAddress('Queen Elisabeth rod')
            ->setZipcode('BT1 1BT')
            ->setCity('Belfast')
            ->setLocalization('northern-ireland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('Superman way')
            ->setZipcode('BT47 3AS')
            ->setCity('Newry')
            ->setLocalization('northern-ireland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Patrick Dempsey')
            ->setAddress('London Road')
            ->setZipcode('BTD E5F')
            ->setCity('Soho')
            ->setLocalization('nothern-ireland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Keith Harrigton')
            ->setAddress('Winter street')
            ->setZipcode('LA1 1AE')
            ->setCity('Lancaster')
            ->setLocalization('north-west');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('John Stamos')
            ->setAddress('San Fran street')
            ->setZipcode('LA1 1AJ')
            ->setCity('Liverpool')
            ->setLocalization('north-west');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Micheal B Jordan')
            ->setAddress('1 Kingcross road')
            ->setZipcode('CH1 1AF')
            ->setCity('Chester')
            ->setLocalization('north-west');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Nine lives boulevard')
            ->setZipcode('CA1 1AF')
            ->setCity('Carlisle')
            ->setLocalization('north-west');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Chris Hemsworth')
            ->setAddress('22 Kings Road')
            ->setZipcode('DH1 1AF')
            ->setCity('Durham')
            ->setLocalization('north-east');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Pedro Pascal')
            ->setAddress('1 DEA bld')
            ->setZipcode('NE10 0AH')
            ->setCity('Gateshad')
            ->setLocalization('north-east');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('José María Yazpik')
            ->setAddress('Netflix street')
            ->setZipcode('SR1 1AG')
            ->setCity('Sunderland')
            ->setLocalization('north-east');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Pêpê Rapazote')
            ->setAddress('Season Two boulevard')
            ->setZipcode('NE1 1DF')
            ->setCity('Newcastle')
            ->setLocalization('north-east');
        $manager->persist($farmer);

        $manager->flush();


        #Data set for category, working with our real internal category set
        $salty = new Category();
        $salty->setName('Salty')
            ->setAlias('salty');
        $manager->persist($salty);
        $manager->flush();

        $sweets = new Category();
        $sweets->setName('Sweets')
            ->setAlias('sweets');
        $manager->persist($sweets);
        $manager->flush();

        $beverages = new Category();
        $beverages->setName('Beverages')
            ->setAlias('beverages');
        $manager->persist($beverages);
        $manager->flush();




        #Data for salty recipes
        $fataya = new Recipe();
        $fataya->setTitle("Pastels (Fried Fish Pies)")
            ->setAlias('pastels-fried-fish-pies')
            ->setCategory($salty)
            ->setImg('https://lesateliersdeiba.files.wordpress.com/2017/03/fataya-60-sur-76.jpg?w=470')
            ->setTags('Fish, Empanadas, Comfy food, Fried')
            ->setIngredients('- 1 3⁄4 cups flour
            - 1 egg, lightly beaten
            - 2 tbsp. canola oil, plus more for frying
            - 100ml de jus de citron
            - 1 morceau de guedj, yet
            - 2 cloves garlic, roughly chopped
            - 1 medium yellow onion, finely chopped
            - 1 habañero or Scotch bonnet chile, stemmed, seeded, and minced
            - 8 oz. white fish, such as mackerel, trout, or dorad
            - 4 sprigs parsley, finely chopped
            - 2 leaves basil, finely chopped
            - 2 sprigs cilantro, finely chopped
            - 3 piments frais
            - Kosher salt and freshly ground black pepper, to taste')
            ->setInstructions("
            Combine flour, egg, and 6 tbsp. water in a bowl and stir until dough begins to form into a shaggy mass; transfer dough to a work surface and knead until all flour is absorbed and dough is smooth, about 6 minutes. Wrap dough in plastic wrap and let sit for 1 hour. Meanwhile, heat oil in a 2-qt. saucepan over medium-high heat; add garlic, onion, and chile, and cook, stirring, until soft, about 5 minutes. Remove from heat and transfer to a bowl. Stir in fish, parsley, cilantro, basil, and salt and pepper; set filling aside.
            Using a rolling pin, roll dough into a 1⁄8'-thick circle; using a 3' round cutter, cut out about 24 circles from dough. Place about 1 tsp. filling in the center of a dough circle, and using your finger, wet the edge of half the circle; close circle over filling to create a half moon and press on the edges to seal. Using a fork, crimp edges to close; repeat with remaining filling and dough circles.
            Pour oil to a depth of 2' in a 6-qt. Dutch oven and heat over medium-high heat until a deep fry thermometer reads 350°. Working in batches, fry pies until golden brown and filling is cooked through, about 6 minutes. Transfer pies to parchment paper to drain; serve hot with kaani sauce.
            ")
            ->setVideo('https://youtu.be/0j11NwS7LXY');
        $manager->persist($fataya);

        $thieboudienne = new Recipe();
        $thieboudienne->setTitle('THIEBOUDIENNE: SENEGALESE JOLLOF RICE AND FISH')
            ->setAlias('thieboudienne-senegalse-jollof-rice-and-fish')
            ->setCategory($salty)
            ->setImg('https://i1.wp.com/www.yummymedley.com/wp-content/uploads/2017/05/Thieboudienne-Bon-Appetit.jpg?w=750&ssl=1')
            ->setTags('Fish, Familial, Senegal, Travel')
            ->setIngredients('
            Ingredients for fish and stuffing : 
            - A handful of parsley about a heaping cup
            - 3 cloves of garlic
            - 1 scotch bonnet/ habanero pepper
            - 1 tsp shrimp bouillon
            - 1 tsp black pepper
            - 1 tsp salt
            - 2.5 lbs blue snapper fish preferably cut into fish steaks or any white fish of your choice
            - 
            Ingredients for the Jollof Rice :
            - 2 cups of broken jasmine rice or regular jasmine rice (should be soaked in water)
            - 1 sweet potato
            - 1 purple eggplant
            - 4 carrots I used orange purple and yellow carrots
            - 1/2 a head of cabbage
            - 2 bell peppers
            - 3 scotch bonnet/ habanero peppers
            - For the sauce
            - 1 cup vegetable oil
            - 1 cup tomato paste
            - 1 large onions sliced
            - 3 cloves of garlic
            - 2 scotch bonnet/ habanero peppers I used green scotch bonnets, the color doesn’t really matter
            - 3 tablespoon of shrimp bouillon
            - 1 teaspoon of black pepper
            - Salt to taste
            ')
            ->setInstructions('
            With a mortar and pistol or in a food processor, grind the parsley, garlic, scotch bonnet, bullion black pepper and salt into a rough paste.
            Poke two holes into the flesh of the fish and stuff them with the parsley mix. Broil or Fry the fish until it is golden brown on each side, and set aside for the sauce
            In a mortar and with a pestle or in a food processor grind the scotch bonnet peppers and garlic into a rough paste.
            Saute the sliced onions in the oil over medium heat until translucent. Add in the tomato paste, and stir fry for 5 minutes. The tomato paste may start to brown a little.
            Add in the ground garlic and scotch bonnet and stir fry for another 2 minutes. Add in bullion, black pepper, and 8 cups of water. At this stage, taste the sauce for salt, and adjust to your preference.
            Add in the tough vegetable first in to the sauce and cook until tender. In this case, add in the sweet potatoes, cook until tender and remove, then the carrots, cook until tender and remove. Continue adding in the vegetables until all the vegetables are cooked.
            Set the cooked vegetables aside and then add in the fish and cook in the sauce for 2-5 minutes. Once the fish has simmered in the sauce for 2-5 minutes, gently remove it from the sauce.
            At this point, drain the rice that has been cooking and pour into the sauce. The sauce should just cover the rice. Adjust the amount of water at this stage if needed to make sure that the rice is just covered.
            Cover the pot and simmer on low-medium heat for 15-20 minutes. You may seal the cover of the pot with foil to prevent steam from escaping.
            At the 15 minute mark, check that the rice has absorbed the moisture and is soft. Cover and cook for another 5 minutes if it needs more time. If the water has dried up and the rice is still not soft, add in 4 tbsp of water, cover and allow to cook. Serve the thieboudienne hot with the vegetables and fish, and lime wedges.
            ')
            ->setVideo('https://youtu.be/VHYzLnmAvnY');
        $manager->persist($thieboudienne);
        $manager->flush();

        $pumpkinpasta = new Recipe();
        $pumpkinpasta->setTitle('Creamy Pumpkin Pasta with Pine Nut Gremolata')
            ->setAlias('Creamy-Pumpkin-Pasta-with-Pine-Nut-Gremolata')
            ->setCategory($salty)
            ->setImg('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/creamy-pumpkin-pasta-1599513084.jpg?crop=1.00xw:1.00xh;0,0&resize=980:*')
            ->setTags('Pasta, Pumpkin, Easy Recipe, Quick')
            ->setIngredients('
            - 12 oz. rigatoni
            - 2 tbsp. olive oil, divided
            - 12 fresh sage leaves
            - 1/4 c. pine nuts, toasted and roughly chopped
            - 1 tsp. finely grated lemon zest
            - 1 shallot, finely chopped
            - 2 cloves garlic, pressed
            - Kosher salt and freshly ground black pepper
            - 1 c. canned pure pumpkin
            - 2 oz. Parmesan cheese, grated (about 1/2 cup), plus more for serving
            - 1/4 c. heavy cream
            - 1/8 tsp. fresh grated nutmeg
            ')
            ->setInstructions('
            1. Cook pasta per package directions. Reserve 1 cup cooking water; drain pasta and return to pot. 
            2. Heat 1 tablespoon oil in a large saucepan over medium heat. Add sage and cook until crisp, 2 to 3 minutes. Transfer with a slotted spoon to a paper towel–lined plate; when cool, crumble into pieces. Toss together sage, pine nuts, and lemon zest in a bowl.
            3. Add remaining 1 tablespoon oil, shallot, and garlic to saucepan. Season with salt and pepper. Cook, stirring occasionally, until tender, 1 to 2 minutes. Add pumpkin, Parmesan, heavy cream, nutmeg, and 1/2 cup reserved pasta water. Cook until slightly thickened, 3 to 5 minutes. Season with salt. (If desired, use an immersion blender or standard blender to puree until smooth.) Add pasta and stir to combine (add more pasta water if sauce seems too thick). Serve sprinkled with Pine Nut Gremolata.
            ')
            ->setVideo('https://www.youtube.com/watch?v=dS5sSKZPrC8&ab_channel=RainbowPlantLife');
        $manager->persist($pumpkinpasta);
        $manager->flush();

        #Data for sweets

        $apple = new Recipe();
        $apple->setTitle('Apple Pandowdy')
            ->setAlias('apple-pandowdy')
            ->setImg('https://assets.bonappetit.com/photos/59f8b19fc0d92a74e456acb7/16:9/w_2560%2Cc_limit/apple-pandowdy.jpg')
            ->setCategory($sweets)
            ->setTags('Apple, Sugar')
            ->setIngredients('
            - 6 tablespoons unsalted butter
            - 4 pounds Pink Lady and/or Granny Smith apples
            - ⅔ cup (packed) dark brown sugar
            - 3 tablespoons all-purpose flour, plus more for surface
            - 1 tablespoon vanilla extract
            - 2 teaspoons ground cinnamon
            - ½ teaspoon kosher salt
            - 1 lemon
            - 1 ½-inch piece ginger
            - 1 package frozen puff pastry (preferably Dufour), thawed by covering pastry sheet with plastic and leaving at room temperature 30 minutes
            - Granulated sugar (for sprinkling)
            - 2 pints vanilla ice cream
            ')
            ->setInstructions('
            Preheat oven to 425°. Cook 6 Tbsp. butter in a small saucepan over medium heat, swirling often, until bubbling and golden, about 5 minutes; set aside.
            Prepare your apples: Using a vegetable peeler, remove peel from apples. Stand them upright and slice down along core, working all the way around to remove big lobes of flesh. Cut lobes lengthwise into 1" pieces (irregular shapes are fine). Discard peel and cores. Transfer apples to a large bowl.
            Add ⅔ cup dark brown sugar, 3 Tbsp. flour, 1 Tbsp. vanilla, 2 tsp. cinnamon, and ½ tsp. salt to bowl with apples.
            Using a microplane or fine rasp grater, grate zest of ½ lemon over apples. Cut lemon in half and squeeze juice from zested half over apples, catching any seeds. Using peeler, remove peel from ginger, then grate over apples.
            Toss apple mixture until combined, then transfer to a shallow 3-qt. baking dish. Drizzle all but 2 Tbsp. brown butter over apples.
            Dust cutting board with a light coating of flour and unfold puff pastry on floured surface. Dust top with flour. Cut puff pastry into irregular 1" pieces (any shape is fine).
            Arrange pieces of puff pastry over apples, overlapping but spreading to cover almost completely. Brush pastry with remaining brown butter. Sprinkle with granulated sugar.
            Bake pandowdy until pastry is puffed and golden around edges, 25–30 minutes. Reduce oven temperature to 350° and continue to bake until juices are thick and bubbling and pastry is brown all over, 30–35 minutes longer.
            Using a spoon, press pastry down into warm juices (but don’t submerge); let cool slightly.
            Serve pandowdy warm with ice cream.
            Do Ahead: Pandowdy can be made 1 day ahead. Let cool. Cover loosely with foil and store at room temperature. Reheat uncovered in a 200° oven 20 minutes before serving.
            ')
            ->setVideo('https://www.youtube.com/watch?v=QDslqTVEJXY&ab_channel=America%27sTestKitchen');
        $manager->persist($apple);
        $manager->flush();

        $carrotcake = new Recipe();
        $carrotcake->setTitle('Basically Carrot Loaf Cake')
            ->setAlias('basically-carrot-loaf-cake')
            ->setCategory($sweets)
            ->setTags('Dessert, Basics, Cake')
            ->setImg('https://assets.bonappetit.com/photos/5ca768688115784c0e2a102b/16:9/w_2560%2Cc_limit/Basically-Carrot-Cake-01.jpg')
            ->setIngredients('
            - 1 lb. cream cheese (2 8-oz. packages)
            - ¾ cup vegetable oil, plus more for pan
            - 2¼ cups all-purpose flour
            - 2 tsp. baking powder
            - ¾ tsp. baking soda
            - 2 tsp. ground ginger
            - 2 tsp. ground cinnamon, plus more for dusting
            - 1¾ tsp. kosher salt, divided
            - ¾ lb. carrots
            - 1¾ cups sugar, divided
            - 2 large eggs
            - 3 tsp. vanilla extract, divided
            ')
            ->setInstructions('
            First things first, we need to get that 1 lb. cream cheese to room temperature. If you don’t have time to let it sit out on the counter for several hours, cut it into 1" pieces and place on a heatproof plate on top of your stove. Alternatively, you can microwave the plate of cream cheese in 10-second increments until just softened but not melted, about 30 seconds total.
            Place a rack in middle of oven; preheat to 350°. Lightly grease a 9x5" loaf pan with vegetable oil. Line pan lengthwise with parchment paper, leaving about a 2" overhang. (This will help you lift the cake up and out of the pan.) Important note! If you are using a smaller pan, you\'re going to need to hold back some batter—you\'ll need at least a ½" between the batter and the lip of the pan to account for oven rise, otherwise your cake will overflow. You can bake remaining batter in muffin tins if you have them.
            Whisk 2¼ cups all-purpose flour, 2 tsp. baking powder, 2 tsp. ground ginger, ¾ tsp. baking soda, 2 tsp. cinnamon, and 1½ tsp. Diamond Crystal or (1 tsp. Morton) kosher salt in a medium bowl.
            Peel ¾ lb. carrots and cut off knobby end. Grate on the large holes of a box grater right into bowl of dry ingredients. Use your hands to toss until well coated.
            Scrape half of cream cheese into a large bowl. (This is for the batter, the other half is for the icing!) Using a spatula, spread cream cheese around sides of bowl, working it a few times with your spatula to help soften. Add 1½ cups sugar and keep working with spatula to completely incorporate until it’s no longer gritty all sugar is dissolved, about 15 seconds. Crack 2 large eggs into bowl, then whisk until mixture is very smooth. It might look separated and chunky at first, but whisk vigorously and it will eventually come together. Slowly stream in ¾ cup vegetable oil, whisking constantly to homogenize. Add 2 tsp. vanilla extract and whisk again to combine.
            Fold dry ingredients into egg mixture with your spatula until almost no streaks of floury bits remain.
            Scrape batter into prepared pan, smoothing top with the back of a spoon or spatula.
            Bake cake until a tester inserted into the center comes out clean, 80–90 minutes. (Baking time will vary depending on the size and shape of your loaf pan, so if you aren\'t using a standard 9x5", start checking for doneness at the 70-minute mark and keep an eye on things.) Let cool 20 minutes, then remove from pan using parchment overhang. If the edges are sticking, slide a butter knife around the edge to help release. Transfer to a wire rack and let cool completely.
            While cake cools, make your icing. Scrape remaining 8 oz. cream cheese into a medium bowl. Similarly to what you did earlier, use a spatula to work it around sides of bowl. Add remaining ¼ cup sugar, 1 tsp. vanilla, and ¼ tsp. Diamond Crystal (or a pinch of Morton) kosher salt. Mix with spatula to bring everything together, paddling it as necessary, until icing is very smooth and shiny. (This will take some elbow grease, but don\'t give up!) Cover and keep chilled until cake has cooled.
            Place cooled cake on a platter. Dollop cream cheese frosting on top and make swirls and swooshes with the back of a small spoon as you spread it out to make it look cute. Dust lightly with more cinnamon. Slice with a sharp chef’s knife (not a serrated one) to serve.
            ')
            ->setVideo('https://www.youtube.com/watch?v=eQh2JmPPG8c&ab_channel=YeastMode');
        $manager->persist($carrotcake);
        $manager->flush();

        $lastsweet = new Recipe();
        $lastsweet->setTitle('British puddings')
            ->setAlias('british-puddings')
            ->setCategory('$sweets')
            ->setImg('https://cdn.tasteatlas.com/images/toplistarticles/d9abe51cd36e42a9a077aec0491c9760.jpg?w=375&h=280')
            ->setTags('Britsh sweets, Tea Time')
            ->setIngredients('
            - 1 lb. cream cheese (2 8-oz. packages)
            - ¾ cup vegetable oil, plus more for pan
            - 2¼ cups all-purpose flour
            - 2 tsp. baking powder
            - ¾ tsp. baking soda
            - 2 tsp. ground ginger
            - 2 tsp. ground cinnamon, plus more for dusting
            - 1¾ tsp. kosher salt, divided
            - ¾ lb. carrots
            - 1¾ cups sugar, divided
            - 2 large eggs
            - 3 tsp. vanilla extract, divided
            ')
            ->setInstructions('
            First things first, we need to get that 1 lb. cream cheese to room temperature. If you don’t have time to let it sit out on the counter for several hours, cut it into 1" pieces and place on a heatproof plate on top of your stove. Alternatively, you can microwave the plate of cream cheese in 10-second increments until just softened but not melted, about 30 seconds total.
            Place a rack in middle of oven; preheat to 350°. Lightly grease a 9x5" loaf pan with vegetable oil. Line pan lengthwise with parchment paper, leaving about a 2" overhang. (This will help you lift the cake up and out of the pan.) Important note! If you are using a smaller pan, you\'re going to need to hold back some batter—you\'ll need at least a ½" between the batter and the lip of the pan to account for oven rise, otherwise your cake will overflow. You can bake remaining batter in muffin tins if you have them.
            Whisk 2¼ cups all-purpose flour, 2 tsp. baking powder, 2 tsp. ground ginger, ¾ tsp. baking soda, 2 tsp. cinnamon, and 1½ tsp. Diamond Crystal or (1 tsp. Morton) kosher salt in a medium bowl.
            Peel ¾ lb. carrots and cut off knobby end. Grate on the large holes of a box grater right into bowl of dry ingredients. Use your hands to toss until well coated.
            Scrape half of cream cheese into a large bowl. (This is for the batter, the other half is for the icing!) Using a spatula, spread cream cheese around sides of bowl, working it a few times with your spatula to help soften. Add 1½ cups sugar and keep working with spatula to completely incorporate until it’s no longer gritty all sugar is dissolved, about 15 seconds. Crack 2 large eggs into bowl, then whisk until mixture is very smooth. It might look separated and chunky at first, but whisk vigorously and it will eventually come together. Slowly stream in ¾ cup vegetable oil, whisking constantly to homogenize. Add 2 tsp. vanilla extract and whisk again to combine.
            Fold dry ingredients into egg mixture with your spatula until almost no streaks of floury bits remain.
            Scrape batter into prepared pan, smoothing top with the back of a spoon or spatula.
            Bake cake until a tester inserted into the center comes out clean, 80–90 minutes. (Baking time will vary depending on the size and shape of your loaf pan, so if you aren\'t using a standard 9x5", start checking for doneness at the 70-minute mark and keep an eye on things.) Let cool 20 minutes, then remove from pan using parchment overhang. If the edges are sticking, slide a butter knife around the edge to help release. Transfer to a wire rack and let cool completely.
            While cake cools, make your icing. Scrape remaining 8 oz. cream cheese into a medium bowl. Similarly to what you did earlier, use a spatula to work it around sides of bowl. Add remaining ¼ cup sugar, 1 tsp. vanilla, and ¼ tsp. Diamond Crystal (or a pinch of Morton) kosher salt. Mix with spatula to bring everything together, paddling it as necessary, until icing is very smooth and shiny. (This will take some elbow grease, but don\'t give up!) Cover and keep chilled until cake has cooled.
            Place cooled cake on a platter. Dollop cream cheese frosting on top and make swirls and swooshes with the back of a small spoon as you spread it out to make it look cute. Dust lightly with more cinnamon. Slice with a sharp chef’s knife (not a serrated one) to serve.
            ')
            ->setVideo('https://www.youtube.com/watch?v=nUvIJqhq0KQ&ab_channel=JamieOliver');
        $manager->persist($lastsweet);
        $manager->flush();

        #Data for beverages

        $summersmoothie = new Recipe();
        $summersmoothie ->setTitle('Super Simple Summer Smoothie')
            ->setAlias('Super-Simple-Summer-Smoothie')
            ->setImg('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/how-to-make-a-smoothie-1601565091.jpg?crop=1xw:0.9979353062629044xh;center,top&resize=980:*')
            ->setCategory('$beverages')
            ->setTags('Healthy, Smoothie, Fruits')
            ->setIngredients('
            - Liquid (milk, juice, water, yogurt)
            - Soft fruits + veggies
            - Leafy greens
            - Dry ingredients (seeds, protein powders)
            - Ice + other frozen ingredients
            ')
            ->setInstructions('
             While a simple strawberry smoothie makes a yummy snack or light breakfast, there are some fun ways to jazz up this super sipper. Try our Test Kitchen’s favorite tricks:
             -Smoothie art: Before pouring the smoothie into your cup, garnish the glass by pressing thinly sliced pieces of fruit up against the inside of your smoothie cup. You can use a wooden skewer to stick the fruit closer to the bottom of the glass. Then, carefully spoon the smoothie into the glass, and you’ll be left with a colorful drink decorated with a pretty pattern of fresh fruit! Try this with our favorite fruity summer smoothies.
             -Ombré effect: To try a two-toned smoothie, make two separate smoothie recipes with similar hues (such as strawberry and raspberry). Pour one of the smoothies into your cup, filling halfway, before topping with the other smoothie. This creates eye-catching color and (bonus!) twice as much flavor.
            ')
            ->setVideo('https://www.youtube.com/watch?v=kv9Qux0IEno&ab_channel=SpiceBangla');
        $manager->persist($summersmoothie);
        $manager->flush();

        $tequila = new Recipe();
        $tequila ->setTitle('Tequila Easy')
            ->setAlias('tequila-easy')
            ->setImg('data:image/jpeg;base64,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')
            ->setCategory('$beverages')
            ->setTags('Healthy, Smoothie, Fruits')
            ->setIngredients('
            - Liquid (milk, juice, water, yogurt)
            - Soft fruits + veggies
            - Leafy greens
            - Dry ingredients (seeds, protein powders)
            - Ice + other frozen ingredients
            ')
            ->setInstructions('
             While a simple strawberry smoothie makes a yummy snack or light breakfast, there are some fun ways to jazz up this super sipper. Try our Test Kitchen’s favorite tricks:
             -Smoothie art: Before pouring the smoothie into your cup, garnish the glass by pressing thinly sliced pieces of fruit up against the inside of your smoothie cup. You can use a wooden skewer to stick the fruit closer to the bottom of the glass. Then, carefully spoon the smoothie into the glass, and you’ll be left with a colorful drink decorated with a pretty pattern of fresh fruit! Try this with our favorite fruity summer smoothies.
             -Ombré effect: To try a two-toned smoothie, make two separate smoothie recipes with similar hues (such as strawberry and raspberry). Pour one of the smoothies into your cup, filling halfway, before topping with the other smoothie. This creates eye-catching color and (bonus!) twice as much flavor.
            ')
            ->setVideo('https://www.youtube.com/watch?v=MRcXtKSk7lo&ab_channel=TipsyBartender');
        $manager->persist($tequila);
        $manager->flush();

        $hotchocolate = new Recipe();
        $hotchocolate ->setTitle('Sweety hot chocolate')
            ->setAlias('sweety-hot-chocolate')
            ->setImg('https://assets.bonappetit.com/photos/57accdd1f1c801a1038bc794/16:9/w_1615,h_908,c_limit/Hot-Chocolate-2-of-5.jpg')
            ->setCategory('$beverages')
            ->setTags('Healthy, Smoothie, Fruits')
            ->setIngredients('
            - Liquid (milk, juice, water, yogurt)
            - Soft fruits + veggies
            - Leafy greens
            - Dry ingredients (seeds, protein powders)
            - Ice + other frozen ingredients
            ')
            ->setInstructions('
             While a simple strawberry smoothie makes a yummy snack or light breakfast, there are some fun ways to jazz up this super sipper. Try our Test Kitchen’s favorite tricks:
             -Smoothie art: Before pouring the smoothie into your cup, garnish the glass by pressing thinly sliced pieces of fruit up against the inside of your smoothie cup. You can use a wooden skewer to stick the fruit closer to the bottom of the glass. Then, carefully spoon the smoothie into the glass, and you’ll be left with a colorful drink decorated with a pretty pattern of fresh fruit! Try this with our favorite fruity summer smoothies.
             -Ombré effect: To try a two-toned smoothie, make two separate smoothie recipes with similar hues (such as strawberry and raspberry). Pour one of the smoothies into your cup, filling halfway, before topping with the other smoothie. This creates eye-catching color and (bonus!) twice as much flavor.
            ')
            ->setVideo('https://www.youtube.com/watch?v=ZGt0pJ0BEHM&ab_channel=TheCookingFoodie');
        $manager->persist($hotchocolate);
        $manager->flush();


        /*$manager->flush();*/
    }
}
