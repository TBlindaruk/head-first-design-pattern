Head First Design Patterns for PHP 5
====================================

Version 1.0.0, released 7/28/2009
---------------------------------

By Wren Weburg <wren@weburg.com>  
http://www.weburg.com/hfdp

Table of Contents

* Introduction
* Requirements
* Convention
* How to Run the Command Line Examples
* How to Run the MVC Example
* Special Notes by Pattern
* License
* Versions

### Introduction

First let me say that [_Head First Design Patterns_](http://amzn.com/0596007124)
is a fantastic book serving as a solid and easy to understand introduction into
Design Patterns. I am a much more in tune with the appropriate use of patterns
because of the efforts of its authors. To help further my understanding of the
patterns, Java, and PHP (I started my career in PHP but also have jumped into
Java), I decided to follow the excellent examples set by Mark McFadden (C# port)
and Glenn Puchtel (C++ port) and port the examples to PHP.

I know what you may be thinking: PHP is a Web-oriented language and doesn't
really hold its own against the object oriented power of Java. Not so! While PHP
is aimed mostly at Web development, its object oriented feature set as of PHP 5
is quite comparable to Java's. In fact, many of the examples ported directly,
with only minor syntax changes.

Only about 6 examples couldn't be ported easily to PHP, or didn't make a lot of
sense to port. For example, patterns that made extensive use of Java's GUI
classes were skipped. Also, an applet port was skipped because the concept it
was trying to demonstrate (hooks) was already covered by another example.

All in all, I enjoyed porting the code and hope that it helps others to
understand the differences (and similarities) between PHP and Java.

If you have any questions or feedback, I'd love to hear from you!

### Requirements

- PHP 5.2 or better
	- Sockets extension enabled for running Proxy Pattern
- Windows (tested with Server 2000), Linux (tested with Ubuntu 8.10), Mac OS X
  (tested with 10.5.7)
- Web server to run MVC example (tested with Apache HTTP Server 2 and IIS 5)

### Convention

This may be a touchy area because there's always a lot of subjectivity when
porting from one language to another. My goal was simple: do as little rewriting
of the code as possible to preserve the original intent of the example and
pattern. Having said that, sometimes I leave a lot of code in Java form, and
sometimes I rewrote code using more native PHP concepts. The mix hopefully
combines the best of both worlds: getting the pattern across but also
demonstrating best practices using PHP in an elegant way.

What follows are notes on some of my decisions and approaches to porting the
code.

1. Since PHP has no notion of packages, I used a class loader in PHP to mimic
Java packages and reduce the amount of "require"/"require_once" calls. If PHP
finds the referenced class in the current working directory, it loads it
automatically. Classes that fall outside of the current working directory
however are explicitly required much like how a Java import statement would be
used. This to some extent allows all of the classes in one directory to behave
like a Java package. In PHP, they are merely a group of related classes.

2. In PHP, if no visibility is given for a member or method inside a class, it
defaults to public. For compatibility with Java's default visibility, Java
members and methods which have no explicit visibility were ported as protected. 
Java's default visibility is somewhat like a cross between public and private
access. It's public for all classes in the same package, but private to
everything else. In PHP, protected seemed like a good compromise, and only
cases where members or methods needed to be public was the visibility changed in
order for the examples to run.

3. To run an actual class, PHP simulates the main() method, and separate
run[className].php scripts are used to simulate the JVM calling this method on
the classes. Command line arguments are also passed in and manipulated to mimic
Java's String[] arguments. This helped reduce how much code had to be rewritten
and how much relearning is needed to understand how to run these examples, if
you already know how to run the Java examples.

4. The bootstrap.php file ensures all the libraries are referenced correctly and
also sets up some basic Java compatibility measures to aid in porting. It
sort of serves as an application framework which the examples all depend on.

One other thing you'll notice is that I split up the two supporting library
directories by category.

- The library/custom directory has custom written classes that supports the
  examples using custom written PHP.
- The library/java directory has classes that mimic Java as much as is needed
  for the examples to work.

### How to Run the Command Line Examples

Easy way...

Simply run the appropriate run script from the terminal / command line and
then follow the directions. Easy!

To elaborate, to simply run an example (or all examples) via command line, you
will use the interactive run.bat and run.sh scripts, depending on your OS.
Windows users would run the .bat file, and Linux and Mac OS X users would run the
.sh file. You may need to modify the .sh file permissions, adding the executable
flag, for it to run.

Manually...

Please note that in PHP, you'll want to run scripts that start with the word
"run". They will run the corresponding class. You'll also want to run them from
the directory in which they reside, so that PHP can locate all the required
files (some of the require statements use a relative path for inclusion, which
is unfortunately sensitive to where the script is ran from).

With an IDE...

Or, if you'd like to have a better view of the code, you can run the examples
from Eclipse. I like using the Eclipse PDT plugin, and just run the PHP scripts
inside the IDE. You can then watch the debug output to see the example's print
statements. I'll leave the setup of Eclipse PDT to the Eclipse site
(www.eclipse.org/pdt). But if you follow this option, you'd want to make sure
to install the Zend Debugger which lets you run PHP scripts directly on your
Eclipse machine.

### How to Run the MVC Example

To run the MVC example, you'll need a web server that is set up to run PHP. I
won't cover that setup, since I assume you can handle that. But I will cover
some pointers on how to get the code up and running with as little fuss as
possible. The MVC app in PHP uses a very basic MVC framework but it comes with
a lot of the same convention as other larger frameworks (like Zend Framework).

The basic idea is that you just need to serve the public folder in the example
and have a way to http:// to that folder and have its index.php file served.
Here's a more concrete set of steps based on experience:

1. Leave all existing code intact; the MVC application uses a lot of the
   existing source files and needs the entire HeadFirstDesignPatternsInPHP
   directory structure in order to work.

2. You'll want to serve the following path either in its own virtual host, or
   possibly as a symlink or virtual directory within an existing site:
   
   [...]/HeadFirstDesignPatternsInPHP/headfirst/combined/djviewweb/public

   For example, I like to define a virtual directory called "djview" in the root
   of the local site so that I can navigate to http://localhost/djview
   
3. Make sure your site serves index.php as a default document.

4. Make sure that the user running your Web server has write access to:

   [...]/HeadFirstDesignPatternsInPHP/headfirst/combined/djviewweb/data
   
   To preserve state across requests, the application will save data to disk
   in that location.

In Linux / MacOS, also keep in mind that Apache will want each directory that
leads up to the public directory to have the executable permission set for the
Web server user. This is especially important if you're using a virtual
directory or symlink to pull the public directory into an existing site.

### Special Notes by Pattern (lessons learned, special consideration, etc)

#### Adapter Pattern - Chapter 7

##### Iterator

- This example doesn't map perfectly to PHP since Iterator and Enumeration
  interfaces and implementers either don't exist or don't map to Java, so
  some intermediate supporting code was needed to mimic Java.
- PHP has a build in Iterator interface, but it's not the same interface as
  Java so I renamed the interface to MyIterator for demo purposes.
- In the future, this example may be rewritten to use PHP's native Iterator.

#### Compound Patterns - Chapter 12

##### DJView

- Due to the use of midi, AWT, and Swing, this example isn't (yet) ported to
  PHP.

##### MVC (DJViewWeb)

- This is a PHP adaptation of the DJView MVC example. The Java version uses
  servlets; in PHP, a simple MVC framework is used. The spirit of Java beans
  has been preserved and works well to keep the view and model separate. The
  model given to the view uses the virtual proxy pattern to wrap the model
  and only allow getter access to the underlying model. Refer to the How to
  Run the MVC Example section for information on running this.
- This example uses a FileModel, which basically writes the model state to
  disk as a serialized class. Normally, a database would be used, but I
  wanted to keep things simple to set up and get running quickly.

#### Command Pattern - Chapter 6

##### Simple Remote

- Realized that unquoted, non-dollar sign prefixed text in PHP is treated as
  a string. I.e. echo stuff; echoes the string "stuff". Be careful when
  porting Java code to PHP!

#### Decorator Pattern - Chapter 3

##### Starbuzz

- PHP5 doesn't let you convert a concrete method into an abstract one when
  using inheritance. Java allows this though.

#### Facade Pattern - Chapter 7

##### Home Theater

- PHP doesn't support method overloading, but it can determine the variable
  type of the argument and thus the same method can combine functionality.
  Either that or you'd have to provide two different method names in PHP. I
  chose to have only one method and change its behavior based on the
  argument type. After all, PHP is a dynamically-typed language.

#### Factory Pattern - Chapter 4

##### Abstract Factory Method

- The factory method pattern lets a class defer object instantiation to a
  a subclass. Simple factory on the other hand just allows some class to do
  the instantiation.

#### Iterator Pattern - Chapter 9

##### Diner Merger

- The code does not use the AlternatingDinerMenuIterator, ArrayIterator, or
  ArrayListIterator classes directly.
- Prior to PHP 5.3, namespaces aren't supported, so classes have to be named
  uniquely to avoid PHP "cannot redeclare class" errors.

#### Observer Pattern - Chapter 2

##### Weather

- PHP5 seems to have own Subject and Observer classes, renamed them to avoid
  any collisions. In the future, with PHP 5.3, namespaces can be used to
  keep them separate.
- Had to rewrite list of observers array usage; PHP arrays work different
  than Java's.
- Can also use "pull" method instead of "push" to control data flow more
  accurately.

#### Proxy Pattern - Chapter 11

##### Gumball

- This example uses a custom written proxy, which does the work of Java's
  RMI.

##### Java Proxy

- Creating proxy code in PHP using reflection is much simpler than in Java,
  thanks to PHP's dynamic nature.

##### Virtual Proxy

- Due to the use of AWT and threads, this example isn't (yet) ported to PHP.

#### Singleton Pattern - Chapter 5

- Singleton isn't too difficult to implement. PHP5 can implement singletons
  very similarly to Java. Avoid the trap of trying to make a Singleton
  reusable class. Maybe create an interface for it instead.
- In PHP, make sure to disable the use of a class's __clone() method to
  prevent an existing instance from being cloned.

##### Double-Checked Locking & Threadsafe

- PHP5 doesn't natively support synchronized blocks, and so these examples
  are not easily ported to PHP. It doesn't matter anyway since PHP doesn't
  directly support threads, so synchronization isn't important for ensuring
  singletons work as expected within the same request.

##### Static (eagerly created instance)

- PHP5 cannot have expressions like new objects instantiated in member
  variables. Since the constructor is the only place to initialize such
  members, this Singleton pattern cannot be used in PHP5 (current version).
  Classic Singleton should be used instead.

##### Subclass

- The visibility of methods that override their parent in PHP must be the
  same or weaker, unlike in Java where the access level can be overridden.
- This example doesn't work too well in PHP and gives an error due to the
  above.

#### State Pattern - Chapter 10

##### Gumball State

- PHP instance variables cannot be initialized with other class instance
  variables like they can in Java, so initialize them in the constructor.

#### Template Method Pattern - Chapter 8

##### Applet

- PHP doesn't support applets natively, so skipping the porting of this to
  PHP.

##### Frame

- PHP doesn't support Swing / AWT, though it does have GTK. Perhaps this
  can be ported in the future with a little effort!

##### Simple Barista

- When porting this code, protected visibility is used, and then any failed
  access to a protected method or member results in the visibility being
  raised to public. Most of the time, protected works because classes are
  extended but sometimes, as with this example, some class in the same
  package will access a package private method.

##### Sort

- This was a fun one to port, because PHP provides a built-in usort function
  that works great with the Comparable interface. The custom function that
  gets passed into usort delegates its sorting to the compareTo() method
  of the two argument objects passed in, making for an elegant, native port.

### License

All code is in the public domain for your use / education / enjoyment. Though,
if you use any of the code in your projects or want to redistribute it, I'd just
want to hear from you and/or receive a credit somewhere is about all. Thanks!

### Versions

1.0.0 : 7/28/2009
	- Initial release
