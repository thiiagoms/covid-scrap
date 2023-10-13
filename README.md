<div align="center">
    <a href="https://github.com/thiiagoms/covid-scrap">
        <img src=".assets/virus.png" alt="Logo" width="80" height="80">
    </a>
    <h4 align="center">
      Coronavirus scrap :mask:
    </h4>
    <p float="left">
        <img
            src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"
            alt="PHP"
        >
    </p>
</div>

- [Dependencies :package:](#dependencies)
- [Run :runner:](#run)

### Dependencies

- Docker :whale:

### Run

01 -) Clone:
```bash
$ git clone https://github.com/thiiagoms/covid-scrap
```

02 -) Go to project directory:
```bash
$ cd covid-scrap
covid-scrap $
```

03 -) In your terminal, run:

```bash
covid-scrap $ docker-compose up -d
covid-scrap $ docker-compose exc covid-scrap php covid

😷 Total cases: 696,491,670
💀 Deaths:      6,925,484
🙏 Recovered:   668,447,956
```

04 -) Down containers:
```bash
covid-scrap $ docker-compose down
```
