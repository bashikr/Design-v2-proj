---
author: Stephan Lindström
category:
    - Products
    - Bew Gorp
    - Stockholm
    - Sweden
published: "2020-01-15"
---
Bew's products for 2019
==================================

The educational platform "WE LOVE JAVASCRIPT" was created by Bew Gorp at the beginning of 2019 at the request of our customer Mr.Bashar Al-Taleb. BioGorp has started the design of this website from our customer's desire and budget.

[FIGURE src=image/blogg/javascript.jpg?w=900 class="report1" caption="Educational website about Javascript"]
<!-- area=30,0,10,20  -->


<!-- [You can vist this website on >>>>](http://www.student.bth.se/~baaa19/dbwebb-kurser/javascript1/me/redovisa/me.php) -->
<a href="http://www.student.bth.se/~baaa19/dbwebb-kurser/javascript1/me/redovisa/me.php">You can vist this website on >>>></a>

<!--more-->


Product 2 {#anchor-hit}
-----------------------------------
This launch is just the beginning. The company will continue to evolve, and our platform is designed to flex along with phphtml’s growth.

With an eye toward growth including future commerce and editorial integration, we crafted a modular system leveraging Contentful, a headless CMS, on a serverless infrastructure which means that the current iteration can accommodate whatever future evolutions the site takes.

[FIGURE src=image/blogg/phphtml.jpg?save-as=jpg class="report1" caption="Educational website about PHP, HTML and CSS"]

<a href="http://www.student.bth.se/~baaa19/dbwebb-kurser/htmlphp/me/kmom06/me6/me.php">You can vist this website on »»</a>

Product 3 {#vad-som}
-----------------------------------
Design is one of the world's most iconic brands, selling millions of design courses every year to consumers all around the globe. 

The project was developed in close collaboration with the Design's technical team, with short sprints leading to hand-offs in Zeplin and GitHub. The UX and Design is being implemented in-house and rolled-out across 2019.

[FIGURE src=image/blogg/design.jpg?save-as=jpg&w=1000 class="report1" caption="Educational website about web design"]

<!-- [You can vist this website on >>>>](http://www.student.bth.se/~baaa19/dbwebb-kurser/design/me/redovisa/htdocs/) -->

<a href="http://www.student.bth.se/~baaa19/dbwebb-kurser/design/me/redovisa/htdocs/">You can vist this website on >>>></a>

Product 4 {#vad-som}
-----------------------------------

[FIGURE src=image/blogg/python.jpg?w=1000 class="report1" caption="Educational platform about Python3"]

<!-- [You can vist this website on >>>>](http://www.student.bth.se/~baaa19/dbwebb-kurser/python/me/redovisa/me.html) -->
<a href="http://www.student.bth.se/~baaa19/dbwebb-kurser/python/me/redovisa/me.html">You can vist this website on >>>></a>



<figure>

<script id="asciicast-OdyAfPrjCW9mZYoG1PyqDG9bH" src="https://asciinema.org/a/OdyAfPrjCW9mZYoG1PyqDG9bH.js" async></script>
</figure>


<pre class="hljs">
<code>
<span class="comment"># Python 3: Simple output (if you enter: Bashar)</span>
def greeter():
    """
    Prints greeting
    """
    name = input("What is your name? ")
    print("\nBashar says:\n")
    print("Hello %s - your awesomeness!" % name)
    print("What can I do you for?!")

<span class="output">Hello Bashar - your awesomeness!</span>
<span class="output">What can I do for you?!</span>

<span class="comment"># Python 3: Simple output (if you enter: 32 in Celsius)</span>
def convert_celsius_2_fahrenheit():
    """
    Converts celsius to fahrenheit.
    """
    temp_cels = int(input("Please give the temperature in Celsius: "))
    temp_fhrt = str(round(float(temp_cels)*9/5+32, 4))
    print("It will be", temp_fhrt, "in Fahrenheit.")
<span class="output">It will be 89.6 in Fahrenheit.</span>


<span class="comment"># Python 3: Simple output (if you enter: Basket and 5)</span>
def multiply_a_string(wrd, numb):
    """
    Multiplies a given word to a given number.
    Have something common with maskin def
    """
    return wrd * numb

def multiply_a_word():
    """
    Prints a repated word depending on the number we give
    """
    wrd = input("Could you please give a word: ")
    numb = int(input("Could you please give a number: "))
    rslt = wrd * numb
    print(rslt)
<span class="output">Basket Basket Basket Basket Basket</span>
    </code>
</pre>