# LoneStarConvention April 2016

I decided to attend the LoneStar PHP convention in Dallas, TX in 2016. During the convention I learned a lot and while this is no where near everything I learned and as pretty as I would like it to be, this repository holds the compilation of work that I did and learned at the convention.  


##Thursday Apr. 7 2016
Today I attend two training classes. The first was Demystifying Object-Oriented Programming by Alena Holligan. She described objects and classes to a T. She also explain how you can have classes relate to one another including abstractions, parent/child relationships, traits, interfaces and much more. I specifically was introduced to traits and interfaces as an alternative way to share information between classes on the same hierarchical level rather than extending the class which is limited to one connection.
Suggested http://www.php-fig.org/
Link to slides: https://joind.in/talk/1a5fa

The second was TDD with PhpSpec by Ciaran McNulty. He went in depth on the proper methodology to unit testing and how to change your coding to thinking about the behavior and function of the code before writing any code. He had us pair up and work thru this process of writing the tests to break the code before fixing the issue. This cause short iterations of writing tests, coding and refactoring. It really makes you think about how the code it going to function long before any major problems occur.
Link to slides: https://joind.in/talk/6aled

In the evening, I went to the Laravel DFW MeetUp and got to meet  Taylor Otwell. I also got to hear about custom forms with Laravel and Angular 1.x by Nathan Barrett. Nathan gave some good insight on how a front-end framework such as Angular can interact with the Laravel framework. Taylor got up and spoke about the his current and future projects as well as Q&A.


##Friday Apr. 8 2016
Today was the first day of the convention. Iwas blown by how many dedicated PHP Developers came to this PHP convention.

The first talk that I went to Adventures of a Contract Developer by Tim Lytle. Talked about multiple types of contractors. Sells himself as a mercenary where he is the product, he specializes in his craft and does not hire out or resell and repurpose products because there is a potential for lost time and revenue. Don't undersell yourself because your rate is what your worth. Always over estimate your time so that you can cushion for foreseen errors and snags. When bidding tell the client what to you find as issues and how you would solve the problems. Explained the different type of clients that can occur in freelancing.
Suggested for freelancing https://www.upwork.com/  
Link to slides: https://prezi.com/qls54c5eelol/adventures-of-a-contract-developer/#

The next talk I went to is stop multiplying by 4: Practical software estimation by Chuck Reeves. First thing about estimation is that you are going to get it wrong. You need to gather the requirements from the wordy expression to something that is simplified and understandable. What does the customer really want and want are the actual technical requirements. Break down the requirements into steps for project completion. Use a confidence interval to give a range of estimation, look at this range multiple times, think about what could be the complications with pros and cons, start with extremes and make the range smaller. When dealing with the issues remove people from the problem and use math. Focus on why does the customer want these products and think about the alternatives. Just like Tim's talk do not negotiate on your estimate.

The final talk before last that I went to is Behat: Beyond the Basics by Jessica Mauerhan. Behavior driven development is about what the user really wants rather than the could itself. Everyone from the product managers to developers needs to under the how the project will be completed and when the project is done. Keep asking why until you understand why you are making this feature. Then you need the scenarios of what might happen. Be careful to right up the exact content and should be independent of specifics and more intentions with all paths explored.
Link to slides: https://joind.in/talk/bf743

The first talk I went to after lunch was Measuring and Logging Everything in Real Time by Bastian Hofmann. Error logs are integral to logs for a developer to use. Add more information to the log through an error handler. Aggregate your logs to a central readable log and always log to a file. Try using LEK such is Logstash, elasticsearch, kibana stack and a stasd package for logging. Have a log this includes more than just the basic information, include things like ids and response time.
Suggested https://github.com/yahoo/boomerang

The second talk I went to Building Web Sites that Work Everywhere by Doris Chen. As browsers modernize we still have issues making compatible mobile application. Windows now has a virtual machine to see how your webpage will work on internet explorer and their mobile program. Using CSS3 has allowed web development to need have to worry about browsers.Use feature detection to has an event listener to determine whether or not a feature should happen.
Suggested https://modernizr.com/

The final talk of the day was Hacking your way to better security by Colin O'Dell. OWASP Top 10 are the most critical web application security issues. SQL injection is one of the most common places because if hackers get information into the sql server the malicious code will run and steal your data. TO prevent this try using prepared statements which is available in mysql and most of frameworks. Cross-site scripting (XSS) uses injected code from other websites that highjacks your html and handle this by escaping on the output or use blade/twig. Cross-site request forgery (CSRF) uses html cookies from one site to another to forge requests. To protect against this the protecting site adds a hidden token. Keep your programs up-to-date and keep sensitive files off of the internet.
Suggested http://www.heidisql.com/
Link to slides: https://joind.in/talk/17622

The keynote speaker for The Origin of HyperCard in the Breakdown of the Bicycle for the Mind by Justin Falcone. This was an interesting talk as is we were back in the past at the creation of the hypercard looking forward to the future of now.

##Saturday Apr. 9 2016

The first talk of the morning was Building PHP Daemons & Long Running Processes by Tim Lytle. A long running process in PHP is a long running loop that doesn't stop so that you can get realtime data. Good long run processes will have ways to stop responsibly and ways to restart. Queues for scripting can be used to block, it can be reserved for a while to try a job and will return to the queue if the job can't be completed. There are alternatives to daemons by using webhooks which are better than queues and platforms in the abstract setup.  
Link to slides: https://prezi.com/0l3a7q5dywc6/building-php-daemons-and-long-running-processes/

The second talk of the morning was 4 Design Patterns to Make Better Code by Joseph Maxwell. Rather than doing a singleton try dependency injections which sets up objects and inject them into classes that depend on them and is fairly easy to see in the code. This larger requirements, dependency injection containers such as Pimple and PHP-DI but comes automatic in Symfony and Laravel and it is great for database connections. Another design pattern is Factory that will choose and create any object from the options.

The final talk of the morning was Automation: Work smarter not harder by Matthew Frost. Automation that gets rid of the bane of hated repetitive work.You can automate thing with predictable variations, if it doesn't take more time than doing the task, if it is worth it, it you really don't like the task and will it make you more productive. The morning set-up can be automated by using Alfred application and Bash scripts to run quick commands. Use Ansible, Chef, Puppet or Shell Scripts to automate your provisioning. Use Phing for environments for things like continuous deployment. Menial tasks can be automated to make you more productive.

The first talk of the afternoon was Step Into Debugging by Gary Hockin. XDeBug is debug events through a server such as PHPStorm or Atom from the "client" PHP. After setting up XDeBug, you need to configure this plug-in and then tell the browser to start looking for the bug and set the breakpoint for the where the debug stops inspecting. To set up more advanced breakpoints, you can add in conditions that allow you to drill down on exceptions thrown.

The second talk of the afternoon was Rethinking Loops by John Kary. If you are given a problem like fizzbuzz how would you do it? Why not rethink the idea of loops and consider using arrays.Try and clean up your code by using these other than functions and multiple similar sounding variables by using arrays. Create pipelines that are easier to follow visually within your code.
Link to Slides:  http://johnkary.net/slides/loops/lonestar-php-2016/

The final talk of the afternoon was How To Cope When It All Hits The Fan by Eryn O'Neil. First of all, building software does involve people. When people continually put off the issues try asking the 5 whys and try resolution thru empathy, communication, employ trust, and be flexible. When errors happen do not go head long into the code, make a plan instead. Try to figure out your incident response to a problem before it happens but keep it flexible. Calm down and make a plan then prevent it from happening again.   

The keynote speaker for Keynote: PHP7 and Beyond: The Future of PHP by Anthony Ferrara. PHP powered 80% of the internet and is an enabler. PHP is the future of the internet because of PHP's platform empowers developers and it is forgiving. PHP has an ecosystem is shared code that we all work on. PHP is great at cross-paradigm programming between multiple languages.PHP has a community that are willing to contribute.

##Final Thoughts
LoneStar PHP 2016 was a great convention were I learned a ton and met a lot of cool developers. I am definitely planning on going to next year's convention. Happy coding.   
