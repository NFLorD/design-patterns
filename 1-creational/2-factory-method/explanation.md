A factory method is a way of delegating instantiation logic to child classes.
-> thus, it is defined in an abstract class or interface.

Useful when there is some generic processing in a class but the required sub-class is dynamically decided at runtime. Or putting it in other words, when the client doesn't know what exact sub-class it might need.