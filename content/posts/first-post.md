+++ 
date = "2019-08-24"
title = "A Much Needed Refactor"
slug = "refactor"
+++

I've been meaning to get around to improving my website for months now, but in the classic student fashion I had been putting it off for way too long.
The first time I attempted to make myself a website, I wrote the code from scratch using HTML, CSS and PHP paired with the [Bootstrap](https://getbootstrap.com/) library to make an *ok* looking site.
I spent hours tweaking the CSS to get it how I wanted.
Eventually, I had the idea to start writing blog posts, and this would have been a pain to implement with my setup.
I needed something simpler...


## Statically Generated Websites

When I first pondered updating my website, one of my friends[^1] recommended that I used a static site generator.
More specifically, he recommended [Hugo](https://gohugo.io/).
This would mean that I would be able to get a template (or make my own) and customise it to be just how I want it.
Then, when I wanted to add content, I could just write some simple markdown into a file and let Hugo handle the rest.

At first, I stubbornly refused to go with a solution that involved so little programming.
However, after some time at University I had grown to love writing as many things as possible in markdown - from lecture notes to README files.
On top of that, during my time at American Express, I had noticed that a lot of the graduates had loved using Hugo and [Gatsby](https://www.gatsbyjs.org/) - another static site generator.
So many months later, I finally took the plunge and made this website using Hugo.

## Using Hugo

Once I had downloaded Hugo, setting up my website was really easy.
I first ran a command to make the file structure I needed.
```
hugo new site <site-name>
```
Once this was generated, I edited the `config.toml` file in the root directory.
This allowed me to configure a range of options such as theme, title and author information.
There are countless other more interesting options, such as code block style and enabling emojis! :sunglasses:

I began browsing the multitude of [themes](https://themes.gohugo.io/) that Hugo had to offer.
Picking the theme I was going to use was probably the hardest part of this whole process - I was completely stuck for choice!
I finally settled on a theme called [Coder](https://themes.gohugo.io/hugo-coder/).

To add a page, I simply had to add a markdown file to the `content` directory.
To add it to the website's navigation, I had to add a block to the config.
```
[[menu.main]]
    name = "About Me"
    weight = 1
    url = "/about/"
```
In the above block, the `weight` determines the order of the links on the navigation bar.

Each page also has a header which provides some details, such as a title and description.
```
+++
title = "About Me"
description = "About Bradley Garrod"
keywords = "About"
slug = "about"
+++
```

Blog posts, like this one, are simply put into the `content/posts` directory.

When I created the 'About Me' page, I required some images and custom CSS to make the page just how I wanted.
To do this, I just added a CSS file and images to the `static` folder.

Whilst I was developing the website, I ran
```
hugo server
```
and left it running in the background.
This allowed me to see a live updating version as I wrote on `http://localhost:1313`.
Once I was happy with the content, I simply ran
```
hugo
```
This generated the website files in the `public` directory that I could use with my Apache host.

## My Experience

Hugo has been lovely to work with! 
Personally, I found writing my own site from scratch to be very tedious.
I would spend hours fiddling with the CSS to make it perfect, and Hugo completely removed that with the use of themes and markdown.
This allows me to spend more time focussing on the content rather than the styling of my pages.

Implementing a blog was very simple too.
I didn't even need to write a single line of code to make it work.
There are many cool features to the blog posts, such as the date and time to read you see at the top of this post.

Being able to write content with a live updating view was also a really refreshing experience.
Previously, I had to edit my pages, save and then refresh my browser to see my changes.
This meant that if I had an error in my code, it took me a longer time to see it displayed.
With Hugo, if there is an error then I see it in under a second.
Hugo also makes it really nice for me to develop the website without worrying about having it in the live environment.
Previously, I used the PHP installation on my Linux server running the website instead of installing it on my local machine.
This was lazy of me, I know, but Hugo just needs me to install a package or download an executable!

I learnt a lot writing my own site, and no doubt that experience will prove valuable at some point in my career.
It even proved worthwhile when I wanted to tweak the template for my Hugo site!
However, as a programmer I believe that a language is a tool, and that you should use the right tool for the job.
In my case, using a static site generator is more sensible tool choice.
Besides, now that I have the basics of web languages under my belt, I should be able to pick them up more easily if I ever need to use them later in life.

Many years ago, I also tried to use website creators such as [WordPress](https://wordpress.com/) and [Moonfruit](https://www.moonfruit.com/).
This was great when I wanted to just post some content to the internet, especially as they make create a blog so easy.
Unfortunately, this would definitely not fit the bill for a programmer's portfolio!

## Conclusion

Writing a website myself was a great learning exercise, but in the long run I wanted a website that was super easy to maintain, that looked great and allowed me to write content in a breeze!

The [source code](https://github.com/bred1810/bredley) for this website is available on my GitHub.

<br>

[^1]: Thanks to Dan for recommending that I check out Hugo :smiley:.
Make sure you check out his [site](https://trickey.io/) (also built with Hugo)!
