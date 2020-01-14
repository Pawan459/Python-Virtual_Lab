from tkinter import *
calc = Tk()

calc.title('SIMPLE ARITHEMETIC OPERATONS')
topframe = Frame(calc, width = 800, relief = 'sunken')
topframe.pack()

a = IntVar()
b = IntVar()
res = StringVar()

l1 = Label(topframe, text = "Enter the number 1")
l2 = Label(topframe,text = "Enter the number 2")
l3 = Label(topframe,text = "Result")

t1 = Entry(topframe, textvariable = a)
t2 = Entry(topframe, textvariable = b)
t3 = Entry(topframe, textvariable = res)

l1.grid(row = 0, column = 0)
l2.grid(row = 1, column = 0)
l3.grid(row = 2, column = 0)

t1.grid(row = 0, column = 1)
t2.grid(row = 1, column = 1)
t3.grid(row = 2, column = 1)

bottomframe1 = Frame(calc, width = 400, height = 90, bg = 'powder blue', relief = 'sunken')
bottomframe1.pack(side = BOTTOM)

def add():
    c = a.get()
    d = b.get()
    e = c + d
    res.set(e)

def sub():
    res.set("")
    c = a.get()
    d = b.get()
    e = c - d
    res.set(e)

def mult():
    res.set("")
    c = a.get()
    d = b.get()
    e = c * d
    res.set(e)

def div():
    res.set("")
    c = a.get()
    d = b.get()

    try:
        e = c / d

    except Exception as e:
        l4 = Label(topframe, text = e)
        l4.grid(row = 3, column = 1)

    res.set(e)

def pow():
    res.set("")
    c = a.get()
    d = b.get()
    e = c ** d
    res.set(e)

button1 = Button(bottomframe1, text = "Add", fg = "blue", anchor = 'w',command = add)
button2 = Button(bottomframe1, text = "Subtract", fg = "blue", command = sub)
button3 = Button(bottomframe1, text = "Multiply", fg = "blue", command = mult)
button4 = Button(bottomframe1, text = "Divide", fg = "blue", command = div)
button5 = Button(bottomframe1, text = "Power", fg = "blue", command = pow)
button6 = Button(bottomframe1, text = "Quit", fg = "blue", command = quit)

button1.pack(side = LEFT)
button2.pack(side = LEFT)
button3.pack(side = LEFT)
button4.pack(side = LEFT)
button5.pack(side = LEFT)
button6.pack(side = LEFT)

calc.mainloop()