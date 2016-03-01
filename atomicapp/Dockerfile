FROM projectatomic/atomicapp:0.4.2

MAINTAINER Saleem Ansari

LABEL io.projectatomic.nulecule.specversion="0.0.2" \
      io.projectatomic.nulecule.providers="kubernetes, openshift, docker" \
      Build="docker build --rm --tag test/koel-music-atomicapp ."

ADD /Nulecule /Dockerfile README.md /application-entity/
ADD /artifacts /application-entity/artifacts

