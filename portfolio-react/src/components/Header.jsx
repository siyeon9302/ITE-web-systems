import { Link } from "react-router";
import logo from "@/assets/logo.png";
import menuTap from "@/assets/menuTap.png";

const Header = () => {
  return (
    <>
      <Link to="/">
        <img src={logo} alt="logo icon" />
      </Link>
      <Link to="/menu">
        <img src={menuTap} alt="menu tap bar" />
      </Link>
    </>
  );
};

export default Header;
