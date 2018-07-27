#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

void vuln(){
    char buf[64];
    read(STDIN_FILENO,buf,128);
}
  
int main(int argc, char const *argv[]){
    write(STDOUT_FILENO, "We know you are the best, so come to pwn me.\n", 46);
    fflush(stdout);
    vuln();
    return 0;
}
