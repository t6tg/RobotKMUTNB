from tkinter import *
f = Tk()
f.minsize(180,400)
f.maxsize(180,400)

s_me = StringVar()

def f_b0():
 s_me.set( s_me.get()+ '0' )
def f_b1():
 s_me.set( s_me.get()+ '1' )
def f_b2():
 s_me.set( s_me.get()+ '2' )
def f_b3():
 s_me.set( s_me.get()+ '3' )
def f_b4():
 s_me.set( s_me.get()+ '4' )
def f_b5():
 s_me.set( s_me.get()+ '5' )
def f_b6():
 s_me.set( s_me.get()+ '6' )
def f_b7():
 s_me.set( s_me.get()+ '7' )
def f_b8():
 s_me.set( s_me.get()+ '8' )
def f_b9():
 s_me.set( s_me.get()+ '9' )

def f_b_p():
 s_me.set( s_me.get()+ '+' )
def f_b_d():
 s_me.set( s_me.get()+ '-' )
def f_b_m():
 s_me.set( s_me.get()+ '*' )
def f_b_v():
 s_me.set( s_me.get()+ '/' )


def f_b_c():
    try:
        t0 = s_me.get()
        t1 = s_me.get()
        t1 = t1.replace('+',' ') 
        t1 = t1.replace('-',' ')
        t1 = t1.replace('*',' ')
        t1 = t1.replace('/',' ')
        t2 = t1.split(' ')        
        s_sum = 0
        if t0.find('+') > 0:
            s_sum = int(t2[0]) + int(t2[1])
        elif t0.find('-') > 0:
            s_sum = int(t2[0]) - int(t2[1])
        elif t0.find('*') > 0:
            s_sum = int(t2[0]) * int(t2[1])
        elif t0.find('/') > 0:
            s_sum = int(t2[0]) / int(t2[1])
        s_me.set(s_sum)
    except:
        s_me.set('ERROR')
        
def f_b_s():
    f = open("s.txt","w")
    f.write(s_me.get())
    f.close()
    
def f_b_l():
    f = open("s.txt","r")
    a = f.read()
    s_me.set(a)
    f.close()

e = Entry(f,width=25,textvariable=s_me)
e.place(x=5,y=5)

b0 = Button(f,text='0',width=5,command=f_b0)
b0.place(x=10,y=50)
b1 = Button(f,text='1',width=5,command=f_b1)
b1.place(x=60,y=50)
b2 = Button(f,text='2',width=5,command=f_b2)
b2.place(x=110,y=50)

b3 = Button(f,text='3',width=5,command=f_b3)
b3.place(x=10,y=100)
b4 = Button(f,text='4',width=5,command=f_b4)
b4.place(x=60,y=100)
b5 = Button(f,text='5',width=5,command=f_b5)
b5.place(x=110,y=100)

b6 = Button(f,text='6',width=5,command=f_b6)
b6.place(x=10,y=150)
b7 = Button(f,text='7',width=5,command=f_b7)
b7.place(x=60,y=150)
b8 = Button(f,text='8',width=5,command=f_b8)
b8.place(x=110,y=150)

b9 = Button(f,text='9',width=5,command=f_b9)
b9.place(x=10,y=200)
b_p = Button(f,text='+',width=5,command=f_b_p)
b_p.place(x=60,y=200)
b_d = Button(f,text='-',width=5,command=f_b_d)
b_d.place(x=110,y=200)

b_m = Button(f,text='*',width=5,command=f_b_m)
b_m.place(x=10,y=250)
b_v = Button(f,text='/',width=5,command=f_b_v)
b_v.place(x=60,y=250)

b_c = Button(f,text='C',width=5,command=f_b_c)
b_c.place(x=10,y=300)
b_s = Button(f,text='S',width=5,command=f_b_s)
b_s.place(x=60,y=300)
b_l = Button(f,text='L',width=5,command=f_b_l)
b_l.place(x=110,y=300)

f.mainloop()
