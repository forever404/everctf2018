#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

void vuln(){
    char buf[64];
    read(STDIN_FILENO,buf,128);
}
  
void getShell(){
    char *cmd="/bin/sh";
    system(cmd);
}
    
int main(int argc, char const *argv[]){
    write(STDOUT_FILENO,"Welcome the Pwn World,follow me!\n",36);
    fflush(stdout);
    vuln();
    // getShell();
    return 0;
}
