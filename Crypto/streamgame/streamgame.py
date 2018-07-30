from flag import flag

assert flag.startswith("everctf{")
assert flag.endswith("}")
assert len(flag)==28


def lfsr(R,mask):
    output = (R << 1) & 0xffffff
    i=(R&mask)&0xffffff
    lastbit=0
    while i!=0:
        lastbit^=(i&1)
        i=i>>1
    output^=lastbit
    return (output,lastbit)


if __name__ == '__main__':
    R=int(flag[8:-1],2)
    mask = 0b1010011000100011100

    f=open("key","wb")
    for i in range(12):
        tmp=0
        for j in range(8):
            (R,out)=lfsr(R,mask)
            tmp=(tmp << 1)^out
        f.write(tmp.to_bytes(1, byteorder='big'))
    f.close()
