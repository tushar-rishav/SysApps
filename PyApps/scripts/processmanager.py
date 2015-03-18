#! /usr/bin/env python

from Tkinter import *
import os

class taskmanager(object):
    def __init__(self):
        self.master=Tk()
        self.master.title("Basic Process Manager")
        self.dirfm=Frame(self.master)
        self.dirfm.pack()
        self.ps=Entry(self.master, width=50) # take the PID

        self.activeProcess=os.popen("ps axo pid,stat,euid,ruid,tty,tpgid,sess,pgrp,ppid,pcpu,comm").read()
        self.sbar=Scrollbar(self.dirfm,orient=VERTICAL)
        self.msg=Listbox(self.dirfm,height=20,width=90,cursor="pirate", yscrollcommand=self.sbar.set,selectmode=SINGLE,background="skyblue",font="monospace")
        self.msg.bind('<Double-1>' ,self.getPid)
        self.msg.pack(side=LEFT,fill=BOTH, expand=1)
        self.sbar.config(command=self.msg.yview)
        self.sbar.pack(side=RIGHT,fill=Y, expand=1)
        self.pidArray=self.activeProcess.split("\n")
        for item in self.pidArray:
            self.msg.insert(END,item)
        self.kill=Button(self.master, text="Search", width=10, command=self.killPid)
        self.kill.pack()
        self.quit=Button(self.master, text="Close", width=10, command=self.master.quit)
        self.quit.pack(side=BOTTOM)
        self.ps.pack()
        self.ps.focus_set()
        self.err=Listbox(self.master,height=3,width=90,background="#E6D174",font="monospace")
        self.err.pack(side=LEFT,fill=BOTH, expand=1)


    def killPid(self):
         self.pid=self.ps.get()
         try:
             self.searchResult=os.popen("ps axo pid,stat,euid,ruid,tty,tpgid,sess,pgrp,ppid,pcpu,comm|grep "+self.pid).read()
             self.msg.delete(0,END)

             self.searchArray=self.searchResult.split("\n")
             for item in self.searchArray:
                 self.msg.insert(END,item)


         except AttributeError:
             self.err.delete(0,END)
             self.err.insert(0,"Invalid Process! No such Process exists")

    def getPid(self,ev=None):
        self.msg.config(selectbackground='green')
        self.ps.delete(0,END)
        self.check=self.msg.get(self.msg.curselection()).lstrip()
        self.pid=self.check.split(" ")[0]

        try:
            self.killop=os.popen("kill "+self.pid).read()
            self.msg.delete(0,END)

            self.activeProcess=os.popen("ps axo pid,stat,euid,ruid,tty,tpgid,sess,pgrp,ppid,pcpu,comm").read()
            self.pidArray=self.activeProcess.split("\n")
            for item in self.pidArray:
                self.msg.insert(END,item)

            self.err.delete(0,END)
            self.err.insert(0,"Killed!")
        except AttributeError:
            self.err.delete(0,END)
            self.err.insert(0,"Invalid Process! No such PID exists")


def main():
    tm=taskmanager()
    mainloop()

if __name__=="__main__":
    main()
