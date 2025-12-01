# TDIW
Tecnologies de desenvolupament per a Internet i Web

SESSIÓ DE PROBLEMES 8 – Files exchange protocols

## Local Requirements

1. Locally, you will need to download the document p9_todo.xxx to fillout your answers. Chose one document format.
2. You will need to locally install the wireshark software to analyse network traffic.


## Remote Requirements

We will not be working remotely.

## Working with the new branch

To work with the new branch, you have two options:

### Option 1: Create a subdirectory for each branch:
1. Create a subdirectory locally ``my_local_dir/pX``
2. From the directory ``pX`` you can either clone the whole repo and select the ``pX`` branch, or just clone the specific branch:
``` shell
cd my_local_dir/pX
#cloning the whole repo and afterwards position to the branch pX.
git clone https://github.com/MCarmen/tdiw.git
#alternatively, clone just the branch pX.
git clone --branch pX --single-branch https://github.com/MCarmen/tdiw.git
```

### Option 2: Fetch the new branch from your local repo
1. Go to the directory where you have cloned the ``https://github.com/MCarmen/tdiw.git``repo and fetch the new branches.
``` shell
#From VSCode open a terminal and position to the directory where you have the repo
cd my_local_dir/tdiw
git fetch
```

2. Now, from VSCode, you can checkout the new branch, or from the command line:
``` shell
git checkout pX
```