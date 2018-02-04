all: deploy

deploy:
	rsync -az public src vendor root@elidescarlata.com:/data/web/elidescarlata.com
