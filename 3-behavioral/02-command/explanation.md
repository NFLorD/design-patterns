In object-oriented programming, the command pattern is a behavioral design pattern in which an object is used to encapsulate all information needed to perform an action or trigger an event at a later time. This information includes the method name, the object that owns the method and values for the method parameters.

It allows you to encapsulate actions in objects. The key idea behind this pattern is to provide the means to decouple client from receiver.

Command pattern can also be used to implement a **transaction based system**. Where you keep maintaining the **history of commands** as soon as you execute them. If the final command is successfully executed, all good otherwise just iterate through the history and keep executing the undo on all the executed commands.